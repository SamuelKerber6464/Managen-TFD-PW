entrarc.addEventListener("click", () => {
	cont.style.display = "none";
	contl.style.display = "flex";
	entrarc.style.display = "none";
})
cadastrarl.addEventListener("click", () => {
	cont.style.display = "flex";
	contl.style.display = "none";
	entrarc.style.removeProperty("display")
})
