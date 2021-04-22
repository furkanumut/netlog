@extends('layouts.post')

@section('content')
@include('notify::messages')

<section class="content">

    <div class="post">

        <article class="post-content fullwidth">
            <style type="text/css" media="screen">
                .container {
                    margin: 0px auto;
                    max-width: 600px;
                }

                .sm\:items-start {
                    position: absolute;
                    z-index: 1000;
                }

            </style>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="container">


                <h2>İletişime Geç</h2>
                <div id="form" class="contact-form">
                    <form accept-charset="UTF-8" method="POST" action="{{ route('contact.store') }}" v-on:submit.prevent="validateBeforeSubmit" ref="contact">
                        @csrf
                        <fieldset>
                            <input type="hidden" name="_subject" value="Yeni bir iletisim istegi var!" />
                            <input type="text" name="name" placeholder="Adınız" v-validate="'required'" :class="{ 'has-error': errors.has('name') }"> <span v-if="errors.has('name')" v-cloak>${ errors.first('name') }</span>
                            <input type="text" name="email" placeholder="Email adresiniz" v-validate="'required|email'" :class="{ 'has-error': errors.has('email') }"> <span v-if="errors.has('email')" v-cloak>${ errors.first('email') }</span>
                            <textarea name="message" onkeyup="adjust_textarea(this)" placeholder="Mesajınız" v-validate="'required'" :class="{ 'has-error': errors.has('message') }"></textarea> <span v-if="errors.has('message')" v-cloak>${ errors.first('message') }</span>
                            <button type="submit">Gönder</button> </fieldset>
                    </form>
                </div>
            </div>
        </article>
    </div>

</section>
@endsection

@push('extra-css')
@notifyCss
@endpush

@push('extra-js')
@notifyJs
<script src="https://unpkg.com/vue@2.4.2"></script>
<script src="https://unpkg.com/vee-validate@2.0.0-rc.8"></script>
<script type="text/javascript">
  setTimeout(function() {
  $('.pointer-events-none').animate({ marginRight: "-100%"} , 1000);
  }, 4000);
    Vue.use(VeeValidate);
    const dictionary = {
        en: {
            custom: {
                name: {
                    required: "Adınız gereklidir."
                }
                , email: {
                    required: "Email adresiniz gereklidir."
                    , email: "Email hatalı!"
                }
                , message: {
                    required: "Mesajınız gereklidir."
                }
            }
        }
    };
    VeeValidate.Validator.updateDictionary(dictionary);
    VeeValidate.Validator.setLocale("tr");
    new Vue({
        el: '#form'
        , delimiters: ['${', '}']
        , methods: {
            validateBeforeSubmit: function() {
                this.$validator.validateAll();
                if (!this.errors.any()) {
                    this.$refs.contact.submit();
                }
            }
        }
    });

</script>
@endpush
