let scrollpos = window.scrollY

const header = document.querySelector(".intro_content")
const headerunder = document.querySelector(".under-intro")
const scrollChange = 400

const add_class_on_scroll2 = () => headerunder.classList.add("bg-dark")
const remove_class_on_scroll2 = () => headerunder.classList.remove("bg-dark")


const add_class_on_scroll = () => header.classList.add("bg-dark")
const remove_class_on_scroll = () => header.classList.remove("bg-dark")

window.addEventListener('scroll', function() { 
  scrollpos = window.scrollY;

  if (scrollpos >= scrollChange) { add_class_on_scroll() }
  else { remove_class_on_scroll() }
  
})

window.addEventListener('scroll', function() { 
  scrollpos = window.scrollY;

  if (scrollpos >= scrollChange) { add_class_on_scroll2() }
  else { remove_class_on_scroll2() }
  
})
