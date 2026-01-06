<?php foreach($data as $book): ?>
<div>
    <h4><?= $book['title'] ?></h4>
    <p><?= $book['price'] ?></p>
    <button onclick="addToCart(<?= $book['id'] ?>)">Add to Cart</button>
</div>
<?php endforeach; ?>

<script>
function addToCart(id){
    fetch('/bookstore_mvc/public/cart/add',{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body:JSON.stringify({book_id:id})
    })
}
</script>
