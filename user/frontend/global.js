document.addEventListener("DOMContentLoaded", requestCategories);

function requestCategories() {
    fetch("http://localhost/ecommerce/user/backend/menu.php")
    .then((res) => res.json())  // ✅ Convert response to JSON
    .then((data) => {
        console.log("Fetched Categories:", data); // ✅ API Response Check
        
        const nav = document.querySelector('.navigation');
        if (data.categories) {
            const ul = document.createElement('ul');
            data.categories.forEach(cat => {
                const li = document.createElement('li');
                li.className = cat.name;  
                li.textContent = cat.name;  
                li.addEventListener('click', getCategoryProduct);
                ul.appendChild(li);
            });
            nav.appendChild(ul);
        }
    })
    .catch((err) => console.log("Fetch Error:", err));
}

function getCategoryProduct() {
    console.log('Category clicked');
}
