function(e){
    const t = e.currentTarget;
    const p = t.parentElement;
    const n = p.querySelector(".name");
    const pr =p.querySelector(".price");
    const q = p.querySelector(".quantity");
    console.log(n.textContent);
    console.log(pr.textContent);
    console.log(q.value);
}