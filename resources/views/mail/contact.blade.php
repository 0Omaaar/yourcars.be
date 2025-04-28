<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 5px;">
        <h2 style="color: #333;">Nouveau message de contact</h2>
        <p><strong>Nom:</strong> {{ $formData['name'] }}</p>
        <p><strong>Prénom:</strong> {{ $formData['prenom'] }}</p>
        <p><strong>Email:</strong> {{ $formData['email'] }}</p>
        <p><strong>Téléphone:</strong> {{ $formData['phone'] }}</p>
        <p><strong>Adresse:</strong> {{ $formData['adresse'] }}</p>
        <p><strong>Objet:</strong> {{ $formData['objet'] }}</p>
        <div style="margin-top: 20px; padding: 15px; background-color: #f8f8f8; border-radius: 5px;">
            <h3 style="margin-top: 0;">Message:</h3>
            <p>{{ $formData['message'] }}</p>
        </div>
        <p style="margin-top: 20px; font-size: 12px; color: #777;">Ce message a été envoyé depuis le formulaire de contact de YourCars.be</p>
    </div>
</body>
</html>
