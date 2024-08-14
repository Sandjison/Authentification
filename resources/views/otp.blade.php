<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-Compatible" content="ie=edge">
    <title>Authentication</title>
</head>

<body>
    <form action="{{ route('otpCode.process') }}" method="POST">
        @csrf
        <h1>Code de confirmation</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </ul>
        @endif

        @if ($message = session('error'))
            <div>{{ $message }}</div><br />
        @endif

        <p>Un code de confirmation a été envoyé à votre adresse e-mail. Saisissez-le dans le champ pour continuer.</p>

        <label for="code">Code de confirmation</label><br />
        <input type="hidden" name="email" id="email" value="{{ session()->get('email') }}" />
        <input type="text" name="code" id="code" autocomplete="off"
            placeholder="Saisir le code ici..." /><br /><br />

        <input type="submit" value="Soumettre" />
    </form>
</body>

</html>
