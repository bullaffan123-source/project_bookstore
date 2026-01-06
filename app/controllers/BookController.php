<?php
class BookController extends Controller {
    public function list() {
        $books = $this->model('Book')->all();
        $this->view('books/list', $books);
    }
}
