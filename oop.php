<?php

class Book {

    // Private properties
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        // Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the number of available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies of '{$this->title}' are available to borrow.\n";
        }
    }

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {

    // Private property for the member's name
    private $name;

    public function __construct($name) {
        // Initialize properties
        $this->name = $name;
    }

    // Method to get the member's name
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book
    public function borrowBook(Book $book) {
        $book->borrowBook();
    }

    // Method to return a book
    public function returnBook(Book $book) {
        $book->returnBook();
    }
}

// Usage

// Create 2 books with the following properties
$book1 = new Book('The Great Gatsby', 5);
$book2 = new Book('To Kill a Mockingbird', 3);

// Create 2 members with the following properties
$member1 = new Member('John Doe');
$member2 = new Member('Jane Smith');

// Member 1 borrows Book 1
$member1->borrowBook($book1);

// Member 2 borrows Book 2
$member2->borrowBook($book2);

// Print Available Copies with their names:
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";

?>
