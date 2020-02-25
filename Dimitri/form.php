<table style="width:100%">
    <tr>
        <td>
            <a>Prenom : </a>
        </td>
        <td>
            <input type="text" name="prenom" />
            <span class="error">* <?php echo $prenomErr;?></span>
        </td>
    </tr>
    <tr>
        <td>
            <a>Nom : </a>
        </td>
        <td class="value">
            <input type="text" name="nom" />
            <span class="error">* <?php echo $nomErr;?></span>
        </td>
    </tr>
    <tr>
        <td>
            <a>Adresse postale : </a>
        </td>
        <td>
            <input type="text" name="adresee" />
            <span class="error">* <?php echo $adresseErr;?></span>
        </td>
    </tr>
    <tr>
        <td>
            <a>Adresse mail : </a>
        </td>
        <td>
            <input type="text" name="mail" />
            <span class="error">* <?php echo $mailErr;?></span>
        </td>
    </tr>
    <tr>
        <td>
            <a>Numéro de téléphone : </a>
        </td>
        <td>
            <input type="text" name="tel" />
            <span class="error">* <?php echo $telErr;?></span>
        </td>

    </tr>
</table>