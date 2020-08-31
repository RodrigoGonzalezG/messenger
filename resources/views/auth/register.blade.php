@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Registro" class="my-5">
                @if($errors->any())
                        <b-alert variant="danger" show>
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </b-alert>
                    @else
                        <b-alert variant="success" show>Porfavor ingresa tus datos</b-alert>
                    @endif
                <b-form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <b-form-group
                        label="Nombre:"
                        label-for="name">
                        <b-form-input 
                            id="name"
                            type="text" name="name"
                            value="{{ old('name') }}" required autofocus>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group
                        label="Correo electrónico:"
                        label-for="email"
                        description="Nunca compartiremos tu correo. Está seuro con nosotros.">
                        <b-form-input 
                            id="email"
                            type="email" name="email"
                            value="{{ old('email') }}" required
                            placeholder="example@ProgramacionConLaravel.com">
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="Contraseña:" label-for="password">
                        <b-form-input id="password" type="password" name="password" required>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group
                        label="Confirmar contraseña:"
                        label-for="password_confirmation">
                        <b-form-input 
                            id="password_confirmation"
                            type="password" name="password_confirmation" required >
                        </b-form-input>
                    </b-form-group>

                    <b-button block type="submit" variant="secondary">
                        Confirmar registro
                    </b-button>
                    <b-button block href="{{ route('login') }}" variant="link">
                        ¿Ya te has registrado?
                    </b-button>                        
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
