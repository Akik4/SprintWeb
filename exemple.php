<html>
<head>
<title> securité </title>
<script type="text/javascript">
function Check() {
    password = document.forms[0].pass.value;
    passwordlow = password.toLowerCase();
    majuscule = false;
    numerique = false;
    speciale = false;

    if (password != passwordlow) {
        majuscule = true;
    }

    taille = password.length;

    for (i = 0; i < taille; i++) {
        caractere = password.substring(i, i + 1);
        if (!isNaN(caractere)) {
            numerique = true;
        }
        if (/[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/.test(caractere)) {
            speciale = true;
        }
    }if (majuscule && numerique && speciale && taille > 15) {
        document.getElementById("faible").style.backgroundColor = 'green';
        document.getElementById("moyen").style.backgroundColor = 'green';
        document.getElementById("elevee").style.backgroundColor = 'green';
    }
    else if (majuscule && numerique && speciale && taille > 11) {
        document.getElementById("faible").style.backgroundColor = 'orange';
        document.getElementById("moyen").style.backgroundColor = 'orange';
        document.getElementById("elevee").style.backgroundColor = 'white';
    }
    else if (taille > 7 && majuscule && numerique && speciale) {
        document.getElementById("faible").style.backgroundColor = 'red';
        document.getElementById("moyen").style.backgroundColor = 'white';
        document.getElementById("elevee").style.backgroundColor = 'white';
    } 
     else {
        document.getElementById("faible").style.backgroundColor = 'white';
        document.getElementById("moyen").style.backgroundColor = 'white';
        document.getElementById("elevee").style.backgroundColor = 'white';
    }
}
</script>

</head>
<body>
<form method = post>

<input type="password" name="pass" OnKeyDown="Check();"><br><br>

<table border="none" width="300">
<tr>
<td id="faible" align="center" style="background-color :white;">Faible</td>
<td id="moyen" align="center" style="background-color :white;">Moyen</td>
<td id="elevee" align="center" style="background-color :white;">Elevee</td>
</tr>
</table>

</form>
</body>
</html>
