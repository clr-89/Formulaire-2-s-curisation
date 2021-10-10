

<form action="thanks.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="phoneNumber">Numéro de téléphone :</label>
        <input type="text" id="phoneNumber" name="phoneNumber">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="text" id="email" name="email">
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="subject">
            <option> Problème de livraison
            <option> Problème lors du paiement
            <option> Retour et Remboursement
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Soumettre votre message</button>
    </div>
</form>
