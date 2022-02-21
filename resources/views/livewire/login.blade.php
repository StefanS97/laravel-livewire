<section>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center mt-5 pt-5">
            <div class="col-md-8 col-lg-6 col-xl-4 m-5 px-5 pb-5 pt-4" style="box-shadow: 5px 3px 30px rgba(0,0,0,0.2)">
                <h2 class="text-center mb-3">Login</h2>
                <form wire:submit.prevent="loginHandler">
                    <div>
                        @if (session()->has("error"))
                            <div class="alert alert-danger">
                                {{ session("error") }}
                            </div>
                        @endif
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <x-inputs.text wire:model="email" id="email" type="email" labelName="Email Address" />
                        <x-error errorName="email" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <x-inputs.text wire:model="password" id="password" type="password" labelName="Password" />
                        <x-error errorName="password" />
                    </div>

                    <div class="d-flex justify-content-between pt-2">
                        <a href="#" class="text-body small fw-bold">Forgot password?</a>
                        <p class="small fw-bold">Don't have an account? <a href={{ route("register") }}
                            class="link-danger">Register</a></p>
                    </div>

                    <div class="text-center text-sm-end pt-2">
                        <button type="submit" class="btn btn-primary"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>