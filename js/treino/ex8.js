function updateQuantity(id, quantity){
    const row = document.querySelector(`#cart > tr[data-id=${id}]`);
    if (row){
        const q = row.querySelector(".quantity")
        q.textContent= parseInt(quantity,10)
    }
}