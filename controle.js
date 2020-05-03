function ValidateEmail(email)
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
  {
    return (true)
  }

    return (false)
}
function verif()
{
	if(document.getElementById('nom').value=='')
		 {
		 	alert('le champs Nom est obligatoire');
      return false;
		 }
		 else if(document.getElementById('prenom').value=='')
		 {
		 	alert('le champs Prenom est obligatoire');
      return false;
		 }
		 else if(document.getElementById('username').value=='')
		 {
		 	alert('le champs Username est obligatoire');
      return false;
		 }
		else if(document.getElementById('adresse').value=='')
		 {
		 	alert('le champs Adresse est obligatoire');
      return false;
		 }
		else if(document.getElementById('tel').value=='')
		 {
		 	alert('le champs Telephone est obligatoire');
      return false;
		 }
     else if(document.getElementById('email').value=='')
 		 {
 		 	alert('le champs 3asba est obligatoire');
      return false;
 		 }
		else if(document.getElementById('password').value=='')
		 {
		 	alert('le champs mot de passe est obligatoire');
      return false;
		 }
		 else if (document.getElementById('password1').value!= document.getElementById('password').value)
		{
			alert('Veuillez choisir le meme mot de passe');
      return false;
		}
    else if (ValidateEmail(email)===false)
    {

      alert('Veuillez choisir une adresse mail valide');
      return false;
    }
}

function verif1() 
{
  if(document.getElementById('username').value=='')
		 {
		 	alert('le champs username est obligatoire');

      return false;
		 }
		 else if(document.getElementById('password').value=='')
		 {
		 	alert('le champs mot de passe est obligatoire');
      return false;
		 }
}
