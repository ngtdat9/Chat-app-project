const searchBar = document.querySelector(".users .search input"),
  searchBtn = document.querySelector(".users .seerch button");

searchBtn.onclick = () => {
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");
};
