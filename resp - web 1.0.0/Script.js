const title = document.title;
window.addEventListener("blur", function()
{
    this.document.title = "hey you😐"
});

window.addEventListener("focus", function(){
    document.title = title;
});

// --------------------------------


const checkbox = document.getElementById("checkbox")
checkbox.addEventListener("change", () => {
  document.body.classList.toggle("dark")
})




 