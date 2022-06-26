const d=document;
const ls= localStorage;



export default function darkTheme(btn,classDark,stage){
const $themeBtn=d.querySelector(btn),
$selectors=d.querySelectorAll("[data-dark]")//corchete especifica

let moon="🌙",
sun="☀️"

const modoclaro=()=>{   $selectors.forEach(el=>el.classList.remove(classDark));
    $themeBtn.textContent=moon;
    ls.setItem("theme", "light")
}

const modooscuro=()=>{ $selectors.forEach(el=>el.classList.add(classDark));
            $themeBtn.textContent=sun;
            ls.setItem("theme", "dark")

        }

d.addEventListener("click",(e)=>{
    
    if(e.target.matches(btn)){
        if($themeBtn.textContent===moon){
           modooscuro()
  }
         else{
         modoclaro()
      
        } 
      
       
    }
    
});
/*LOCAL STORAGE GUARDA EL ULTIMO TEMA  */

d.addEventListener("DOMContentLoaded", (e)=>{
    if(ls.getItem("theme")===null)ls.setItem("theme", "light");
    if(ls.getItem("theme")==="light") modoclaro();
    if(ls.getItem("theme")==="dark") modooscuro();
})
}
