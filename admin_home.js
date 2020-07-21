function nine()
{
   document.getElementById("ninedd").classList.toggle("show");
}

function ten()
{
   document.getElementById("tendd").classList.toggle("show");
}


function eleven()
{
   document.getElementById("elevendd").classList.toggle("show");
}


function twelve()
{
   document.getElementById("twelvedd").classList.toggle("show");
}


function grad()
{
   document.getElementById("graddd").classList.toggle("show");
}

function pgrad()
{
   document.getElementById("pgdd").classList.toggle("show");
}


window.onclick = function(event) 
{
   if (!event.target.matches('.drop')) 
   {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) 
      {
         var openDropdown = dropdowns[i];
         if (openDropdown.classList.contains('show')) 
         {
            openDropdown.classList.remove('show');
         }
      }
   }
}