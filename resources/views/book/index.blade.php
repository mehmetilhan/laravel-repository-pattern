

@foreach ($books as $book)
    <p>Book Name :  {{ $book->name }}</p>
    <p>Author :  {{ $book->author }}</p>
    <p>Publish Date :  {{ $book->publish_date }}</p>
    <hr>
@endforeach
