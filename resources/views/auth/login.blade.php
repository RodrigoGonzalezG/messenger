@extends('layouts.app')

@section('content')
    <b-container>
        <b-row align-h="center">
            <b-col cols="8">
                <b-card title="Inicio de sesión">
                    <b-alert variant="success" show>Porfavor ingresa tus datos</b-alert>
                    <b-form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <b-form-group
                            label="Correo electrónico:"
                            label-for="email"
                            description="Nunca compartiremos tu correo. Está seuro con nosotros.">
                            <b-form-input 
                                id="email"
                                type="email" name="email"
                                value="{{ old('email') }}" required autofocus
                                placeholder="example@ProgramacionConLaravel.com">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group
                            label="Contraseña:"
                            label-for="password">
                            <b-form-input 
                                id="password"
                                type="password" name="password"
                                value="{{ old('password') }}" required autofocus>
                            </b-form-input>
                        </b-form-group>

                        <b-form-group>
                            <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                                Recordar sesión
                            </b-form-checkbox>                            
                        </b-form-group>

                            <b-button block type="submit" variant="primary">
                                Ingresar
                            </b-button>
                            <b-button block href="{{ route('password.request') }}" variant="link">
                                ¿Olvidaste tu contraseña?
                            </b-button>                        
                    </b-form>
                </b-card>
            </b-col>
        </b-row>
    </b-container>
@endsection
