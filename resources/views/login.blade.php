<!-- HEADER-->
@include ('app._layouts._includes.header')
<!-- END HEADER-->

<body class="login">
    <div>

        <div class="login_wrapper">
            <div class="animate form login_form">

                <section class="login_content">

                    <!-- MESSAGES-->
                    @include('app._layouts._includes.messages')
                    <!-- END MESSAGES-->

                    <form action="{{ route('auth') }}" method="POST">
                        @csrf
                        <h1>Login</h1>
                        <div>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="E-mail" maxlenght="200" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="mail@examplo.com, mail@examplo.com.br" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" maxlengh="32" placeholder="Password" required="" />
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">

                            <br />

                            <button name="login" type="submit" class="btn btn-info" value="">
                                <i class="fa fa-sign-in"></i> Login
                            </button>

                            <div class="clearfix"></div>

                            <br />
                            <p class="change_link">Don't have an account?
                                <a href="{{ route('indexRegister') }}" class="to_register"> Register here</a>
                            </p>

                        </div>

                        <div>
                            <a href="{{ route('index') }}" class="to_register"> Back to Home</a>
                            <div class="clearfix"></div>
                            <br />
                            <br />
                            <h1><i class=""></i> ALFASOFT</h1>
                            <p>©<?php echo date('Y') ?></p>
                        </div>
            </div>
            </form>
            </section>
        </div>
    </div>
    </div>
    <!-- SCRIPTS -->
    @include ('app._layouts._includes.scripts')
    <!-- END SCRIPTS -->
</body>

</html>