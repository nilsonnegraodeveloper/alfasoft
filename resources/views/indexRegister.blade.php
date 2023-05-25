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

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <h1>Register</h1>

                        <div>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Name" maxlenght="100" class="form-control" required="" />
                        </div>

                        <div>
                            <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" maxlenght="200" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="mail@examplo.com, mail@examplo.com.br" placeholder="E-mail" required="" />
                        </div>      

                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" maxlenght="32" required="" />
                        </div>

                        <div>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" maxlenght="32" required="" />
                        </div>

                        <div class="flex-box">
                            <!-- <input type="submit" name="validar" id="validar" class="btn btn-info" value="Register" /> -->

                            <button name="login" type="submit" class="btn btn-info" value="1">
                                <i class="fa fa-check-circle"></i> Register
                            </button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <a href="{{ route('index') }}" class="to_register"> Back to Home</a>
                            <div class="clearfix"></div>
                            <br />

                            <div>
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