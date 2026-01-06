document.querySelector("button").addEventListener("click", () => {
    let search = document.querySelector("input").value;

    fetch(`controllers/searchController.php?q=${search}`)
        .then(res => res.json())
        .then(data => {
            console.log(data); // database result
        });
});
