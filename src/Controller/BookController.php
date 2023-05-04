<?php

namespace App\Controller;

use App\Entity\Book;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller for library
 */
class BookController extends AbstractController
{
    #[Route('/library', name: 'library')]
    public function index(): Response
    {
        return $this->render('book/index.html.twig');
    }

    #[Route('/library/show', name: 'all_books')]
    public function showAllBook(
        BookRepository $bookRepository
    ): Response {
        $books = $bookRepository
            ->findAll();

        return $this->render('book/books.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/library/show/{id}', name: 'book_by_id')]
    public function showBookById(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository
            ->find($id);

        return $this->render('book/book.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/library/create', name: 'book_create', methods: ['GET', 'POST'])]
    public function createBook(
        ManagerRegistry $doctrine,
        Request $request
    ): Response {
        $entityManager = $doctrine->getManager();

        if ($request->request->get('title') != null) {
            $book = new Book();
            $book->setTitle(strval($request->request->get('title')));
            $book->setIsbn(strval($request->request->get('isbn')));
            $book->setAuthor(strval($request->request->get('author')));
            $book->setImage(strval($request->request->get('image')));

            $entityManager->persist($book);

            $entityManager->flush();

            return $this->redirectToRoute('all_books');
        }

        return $this->render('book/add.html.twig');
    }

    #[Route('/library/update/{id}', name: 'book_update', methods: ['GET', 'POST'])]
    public function updateBook(
        BookRepository $bookRepository,
        Request $request,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        if (strval($request->request->get('title')) != null) {
            $book->setTitle(strval($request->request->get('title')));
            $book->setIsbn(strval($request->request->get('isbn')));
            $book->setAuthor(strval($request->request->get('author')));
            $book->setImage(strval($request->request->get('image')));
            $bookRepository->save($book, true);

            return $this->redirectToRoute('all_books');
        }

        return $this->render('book/update.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/book/deleteview/{id}', name: 'book_delete_view')]
    public function deleteBookView(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        return $this->render('book/delete.html.twig', [
            'book' => $book,
        ]);
    }

    #[Route('/book/delete/{id}', name: 'book_delete_by_id', methods: ['POST'])]
    public function deleteBookById(
        BookRepository $bookRepository,
        int $id
    ): Response {
        $book = $bookRepository->find($id);

        if (!$book) {
            throw $this->createNotFoundException(
                'No book found for id '.$id
            );
        }

        $bookRepository->remove($book, true);

        return $this->redirectToRoute('all_books');
    }

    #[Route('api/library/books', name: 'all_books_json')]
    public function showAllBooksJson(
        BookRepository $bookRepository
    ): Response {
        $books = $bookRepository
            ->findAll();

        $response = $this->json($books);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
        );
        return $response;
    }

    #[Route('api/library/book/{isbn}', name: 'book_by_isbn')]
    public function showBookByIsbn(
        BookRepository $bookRepository,
        string $isbn
    ): Response {
        $book = $bookRepository
            ->findOneBy(array('isbn' => $isbn));

        $response = $this->json($book);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
        );
        return $response;
    }
}
