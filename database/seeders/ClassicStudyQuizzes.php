<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\ClassicStudyQuiz;

class ClassicStudyQuizzes extends Seeder
{

  public function run()
  {
    $quizzes = [
      [
        "topic_id" => 1,
        "question" => <<<EOD
    Which of the following is a common noun?
    EOD,
        "choice_1" => <<<EOD
    Dog
    EOD,
        "choice_2" => <<<EOD
    Paris
    EOD,
        "choice_3" => <<<EOD
    John
    EOD,
        "choice_4" => <<<EOD
    Apple
    EOD,
        "correct_choice" => <<<EOD
    Dog
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    What type of noun is "New York"?
    EOD,
        "choice_1" => <<<EOD
    Concrete Noun
    EOD,
        "choice_2" => <<<EOD
    Common Noun
    EOD,
        "choice_3" => <<<EOD
    Proper Noun
    EOD,
        "choice_4" => <<<EOD
    Abstract Noun
    EOD,
        "correct_choice" => <<<EOD
    Proper Noun
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    Which noun is abstract?
    EOD,
        "choice_1" => <<<EOD
    Table
    EOD,
        "choice_2" => <<<EOD
    Love
    EOD,
        "choice_3" => <<<EOD
    Book
    EOD,
        "choice_4" => <<<EOD
    Teacher
    EOD,
        "correct_choice" => <<<EOD
    Love
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    Which of these is a countable noun?
    EOD,
        "choice_1" => <<<EOD
    Rice
    EOD,
        "choice_2" => <<<EOD
    Water
    EOD,
        "choice_3" => <<<EOD
    Apple
    EOD,
        "choice_4" => <<<EOD
    Music
    EOD,
        "correct_choice" => <<<EOD
    Apple
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    Which of the following is a collective noun?
    EOD,
        "choice_1" => <<<EOD
    Dog
    EOD,
        "choice_2" => <<<EOD
    Class
    EOD,
        "choice_3" => <<<EOD
    Chair
    EOD,
        "choice_4" => <<<EOD
    Book
    EOD,
        "correct_choice" => <<<EOD
    Class
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    What is the plural form of "child"?
    EOD,
        "choice_1" => <<<EOD
    Childs
    EOD,
        "choice_2" => <<<EOD
    Children
    EOD,
        "choice_3" => <<<EOD
    Childes
    EOD,
        "choice_4" => <<<EOD
    Childeren
    EOD,
        "correct_choice" => <<<EOD
    Children
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    Which noun is possessive?
    EOD,
        "choice_1" => <<<EOD
    Dog's
    EOD,
        "choice_2" => <<<EOD
    Dogs
    EOD,
        "choice_3" => <<<EOD
    Dog
    EOD,
        "choice_4" => <<<EOD
    Doges
    EOD,
        "correct_choice" => <<<EOD
    Dog's
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    In the sentence "She gave him a gift," the word gift is a:
    EOD,
        "choice_1" => <<<EOD
    Subject
    EOD,
        "choice_2" => <<<EOD
    Direct Object
    EOD,
        "choice_3" => <<<EOD
    Indirect Object
    EOD,
        "choice_4" => <<<EOD
    Prepositional Object
    EOD,
        "correct_choice" => <<<EOD
    Direct Object
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    In the sentence "He is a teacher," the word teacher is a:
    EOD,
        "choice_1" => <<<EOD
    Predicate Noun
    EOD,
        "choice_2" => <<<EOD
    Subject
    EOD,
        "choice_3" => <<<EOD
    Direct Object
    EOD,
        "choice_4" => <<<EOD
    Object of a Preposition
    EOD,
        "correct_choice" => <<<EOD
    Predicate Noun
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    What type of noun is "book"?
    EOD,
        "choice_1" => <<<EOD
    Concrete Noun
    EOD,
        "choice_2" => <<<EOD
    Abstract Noun
    EOD,
        "choice_3" => <<<EOD
    Countable Noun
    EOD,
        "choice_4" => <<<EOD
    Collective Noun
    EOD,
        "correct_choice" => <<<EOD
    Concrete Noun
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    Which sentence contains a plural noun?
    EOD,
        "choice_1" => <<<EOD
    The boy reads a book.
    EOD,
        "choice_2" => <<<EOD
    The dogs are playing outside.
    EOD,
        "choice_3" => <<<EOD
    The girl is running.
    EOD,
        "choice_4" => <<<EOD
    The man walks to work.
    EOD,
        "correct_choice" => <<<EOD
    The dogs are playing outside.
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    Which of the following is a proper noun?
    EOD,
        "choice_1" => <<<EOD
    School
    EOD,
        "choice_2" => <<<EOD
    Car
    EOD,
        "choice_3" => <<<EOD
    Paris
    EOD,
        "choice_4" => <<<EOD
    Girl
    EOD,
        "correct_choice" => <<<EOD
    Paris
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    Which sentence has a noun phrase?
    EOD,
        "choice_1" => <<<EOD
    She is running fast.
    EOD,
        "choice_2" => <<<EOD
    The big red car is parked outside.
    EOD,
        "choice_3" => <<<EOD
    He speaks loudly.
    EOD,
        "choice_4" => <<<EOD
    The sky is clear.
    EOD,
        "correct_choice" => <<<EOD
    The big red car is parked outside.
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    Which of the following is an example of an uncountable noun?
    EOD,
        "choice_1" => <<<EOD
    Water
    EOD,
        "choice_2" => <<<EOD
    Chair
    EOD,
        "choice_3" => <<<EOD
    Dog
    EOD,
        "choice_4" => <<<EOD
    Car
    EOD,
        "correct_choice" => <<<EOD
    Water
    EOD,
      ],
      [
        "topic_id" => 1,
        "question" => <<<EOD
    What is the plural form of "mouse"?
    EOD,
        "choice_1" => <<<EOD
    Mouses
    EOD,
        "choice_2" => <<<EOD
    Mice
    EOD,
        "choice_3" => <<<EOD
    Mices
    EOD,
        "choice_4" => <<<EOD
    Mousees
    EOD,
        "correct_choice" => <<<EOD
    Mice
    EOD,
      ],




      [
        "topic_id" => 2,
        "question" => <<<EOD
    What is the primary function of a pronoun?
    EOD,
        "choice_1" => <<<EOD
    To take the place of a noun
    EOD,
        "choice_2" => <<<EOD
    To show possession
    EOD,
        "choice_3" => <<<EOD
    To describe a person
    EOD,
        "choice_4" => <<<EOD
    To ask a question
    EOD,
        "correct_choice" => <<<EOD
    To take the place of a noun
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    Which of the following is a personal pronoun?
    EOD,
        "choice_1" => <<<EOD
    Him
    EOD,
        "choice_2" => <<<EOD
    This
    EOD,
        "choice_3" => <<<EOD
    Many
    EOD,
        "choice_4" => <<<EOD
    Which
    EOD,
        "correct_choice" => <<<EOD
    Him
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    Which of these is an example of a possessive pronoun?
    EOD,
        "choice_1" => <<<EOD
    He
    EOD,
        "choice_2" => <<<EOD
    My
    EOD,
        "choice_3" => <<<EOD
    His
    EOD,
        "choice_4" => <<<EOD
    They
    EOD,
        "correct_choice" => <<<EOD
    His
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    Which of the following is an indefinite pronoun?
    EOD,
        "choice_1" => <<<EOD
    She
    EOD,
        "choice_2" => <<<EOD
    Someone
    EOD,
        "choice_3" => <<<EOD
    Her
    EOD,
        "choice_4" => <<<EOD
    Me
    EOD,
        "correct_choice" => <<<EOD
    Someone
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    What is the purpose of a reflexive pronoun?
    EOD,
        "choice_1" => <<<EOD
    To emphasize the subject
    EOD,
        "choice_2" => <<<EOD
    To replace a noun in a sentence
    EOD,
        "choice_3" => <<<EOD
    To show ownership
    EOD,
        "choice_4" => <<<EOD
    To indicate that the subject and object are the same
    EOD,
        "correct_choice" => <<<EOD
    To indicate that the subject and object are the same
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    Which of these is a relative pronoun?
    EOD,
        "choice_1" => <<<EOD
    Who
    EOD,
        "choice_2" => <<<EOD
    Mine
    EOD,
        "choice_3" => <<<EOD
    This
    EOD,
        "choice_4" => <<<EOD
    It
    EOD,
        "correct_choice" => <<<EOD
    Who
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    In the sentence "I saw her at the store," what type of pronoun is her?
    EOD,
        "choice_1" => <<<EOD
    Possessive pronoun
    EOD,
        "choice_2" => <<<EOD
    Reflexive pronoun
    EOD,
        "choice_3" => <<<EOD
    Object pronoun
    EOD,
        "choice_4" => <<<EOD
    Subject pronoun
    EOD,
        "correct_choice" => <<<EOD
    Object pronoun
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    Which of the following is a correct sentence with a demonstrative pronoun?
    EOD,
        "choice_1" => <<<EOD
    She gave it to me.
    EOD,
        "choice_2" => <<<EOD
    This is my favorite book.
    EOD,
        "choice_3" => <<<EOD
    We will leave soon.
    EOD,
        "choice_4" => <<<EOD
    They went home.
    EOD,
        "correct_choice" => <<<EOD
    This is my favorite book.
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    Which of the following sentences uses a demonstrative pronoun incorrectly?
    EOD,
        "choice_1" => <<<EOD
    These are my shoes.
    EOD,
        "choice_2" => <<<EOD
    That is the book I wanted.
    EOD,
        "choice_3" => <<<EOD
    Those car are fast.
    EOD,
        "choice_4" => <<<EOD
    This is a great idea.
    EOD,
        "correct_choice" => <<<EOD
    Those car are fast.
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    What does a pronoun need to agree with in number, gender, and person?
    EOD,
        "choice_1" => <<<EOD
    The object of the sentence
    EOD,
        "choice_2" => <<<EOD
    The subject noun it replaces
    EOD,
        "choice_3" => <<<EOD
    The verb in the sentence
    EOD,
        "choice_4" => <<<EOD
    The preposition in the sentence
    EOD,
        "correct_choice" => <<<EOD
    The subject noun it replaces
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    Which of these is an example of an interrogative pronoun?
    EOD,
        "choice_1" => <<<EOD
    Who
    EOD,
        "choice_2" => <<<EOD
    Her
    EOD,
        "choice_3" => <<<EOD
    Them
    EOD,
        "choice_4" => <<<EOD
    Their
    EOD,
        "correct_choice" => <<<EOD
    Who
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    What is the correct use of the reflexive pronoun in the sentence: "She enjoyed herself at the party"?
    EOD,
        "choice_1" => <<<EOD
    To show that the subject and object are the same
    EOD,
        "choice_2" => <<<EOD
    To emphasize the subject
    EOD,
        "choice_3" => <<<EOD
    To ask a question
    EOD,
        "choice_4" => <<<EOD
    To replace the subject
    EOD,
        "correct_choice" => <<<EOD
    To show that the subject and object are the same
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    In the sentence "That book is mine," what type of pronoun is mine?
    EOD,
        "choice_1" => <<<EOD
    Possessive pronoun
    EOD,
        "choice_2" => <<<EOD
    Personal pronoun
    EOD,
        "choice_3" => <<<EOD
    Reflexive pronoun
    EOD,
        "choice_4" => <<<EOD
    Demonstrative pronoun
    EOD,
        "correct_choice" => <<<EOD
    Possessive pronoun
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    What is the function of a possessive pronoun?
    EOD,
        "choice_1" => <<<EOD
    To ask a question
    EOD,
        "choice_2" => <<<EOD
    To replace the subject
    EOD,
        "choice_3" => <<<EOD
    To show ownership
    EOD,
        "choice_4" => <<<EOD
    To introduce a clause
    EOD,
        "correct_choice" => <<<EOD
    To show ownership
    EOD,
      ],
      [
        "topic_id" => 2,
        "question" => <<<EOD
    Which of these sentences contains a relative pronoun?
    EOD,
        "choice_1" => <<<EOD
    She went to the park.
    EOD,
        "choice_2" => <<<EOD
    I don't know who did it.
    EOD,
        "choice_3" => <<<EOD
    They are watching a movie.
    EOD,
        "choice_4" => <<<EOD
    He saw the car on the street.
    EOD,
        "correct_choice" => <<<EOD
    I don't know who did it.
    EOD,
      ],




      [
        "topic_id" => 3,
        "question" => <<<EOD
    Which of the following is an example of an action verb?
    EOD,
        "choice_1" => <<<EOD
    She sings beautifully.
    EOD,
        "choice_2" => <<<EOD
    She is.
    EOD,
        "choice_3" => <<<EOD
    She was a teacher.
    EOD,
        "choice_4" => <<<EOD
    She had been.
    EOD,
        "correct_choice" => <<<EOD
    She sings beautifully.
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    What is the function of a linking verb in a sentence?
    EOD,
        "choice_1" => <<<EOD
    To show action.
    EOD,
        "choice_2" => <<<EOD
    To connect the subject to a complement.
    EOD,
        "choice_3" => <<<EOD
    To express possibility.
    EOD,
        "choice_4" => <<<EOD
    To show a completed action.
    EOD,
        "correct_choice" => <<<EOD
    To connect the subject to a complement.
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    Which of the following sentences contains a helping (auxiliary) verb?
    EOD,
        "choice_1" => <<<EOD
    He writes every day.
    EOD,
        "choice_2" => <<<EOD
    They have been studying for hours.
    EOD,
        "choice_3" => <<<EOD
    She is the teacher.
    EOD,
        "choice_4" => <<<EOD
    He plays soccer.
    EOD,
        "correct_choice" => <<<EOD
    They have been studying for hours.
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    A verb that requires a direct object is called a transitive verb. Which of the following is an example of a transitive verb?
    EOD,
        "choice_1" => <<<EOD
    She sleeps.
    EOD,
        "choice_2" => <<<EOD
    He kicked the ball.
    EOD,
        "choice_3" => <<<EOD
    They run fast.
    EOD,
        "choice_4" => <<<EOD
    She sings.
    EOD,
        "correct_choice" => <<<EOD
    He kicked the ball.
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    Which of these is an example of an intransitive verb?
    EOD,
        "choice_1" => <<<EOD
    She reads the book.
    EOD,
        "choice_2" => <<<EOD
    They are eating lunch.
    EOD,
        "choice_3" => <<<EOD
    He sleeps peacefully.
    EOD,
        "choice_4" => <<<EOD
    He kicked the ball.
    EOD,
        "correct_choice" => <<<EOD
    He sleeps peacefully.
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    Which of the following is an example of a regular verb in the past tense?
    EOD,
        "choice_1" => <<<EOD
    Eat → Ate
    EOD,
        "choice_2" => <<<EOD
    Go → Went
    EOD,
        "choice_3" => <<<EOD
    Walk → Walked
    EOD,
        "choice_4" => <<<EOD
    Buy → Bought
    EOD,
        "correct_choice" => <<<EOD
    Walk → Walked
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    Which of the following is an irregular verb in the past tense?
    EOD,
        "choice_1" => <<<EOD
    Talk → Talked
    EOD,
        "choice_2" => <<<EOD
    Jump → Jumped
    EOD,
        "choice_3" => <<<EOD
    Play → Played
    EOD,
        "choice_4" => <<<EOD
    Go → Went
    EOD,
        "correct_choice" => <<<EOD
    Go → Went
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    What type of verb is “will” in the sentence “She will go to the store”?
    EOD,
        "choice_1" => <<<EOD
    Action verb
    EOD,
        "choice_2" => <<<EOD
    Linking verb
    EOD,
        "choice_3" => <<<EOD
    Helping verb
    EOD,
        "choice_4" => <<<EOD
    Transitive verb
    EOD,
        "correct_choice" => <<<EOD
    Helping verb
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    Which sentence is in the present continuous tense?
    EOD,
        "choice_1" => <<<EOD
    She writes an email.
    EOD,
        "choice_2" => <<<EOD
    She wrote an email.
    EOD,
        "choice_3" => <<<EOD
    She is writing an email.
    EOD,
        "choice_4" => <<<EOD
    She will write an email.
    EOD,
        "correct_choice" => <<<EOD
    She is writing an email.
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    Which of the following sentences uses the past perfect tense?
    EOD,
        "choice_1" => <<<EOD
    She had eaten before I arrived.
    EOD,
        "choice_2" => <<<EOD
    She eats every day.
    EOD,
        "choice_3" => <<<EOD
    She was eating lunch.
    EOD,
        "choice_4" => <<<EOD
    She will have eaten by noon.
    EOD,
        "correct_choice" => <<<EOD
    She had eaten before I arrived.
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    In the sentence “They have been waiting for an hour,” which verb phrase is in the present perfect continuous tense?
    EOD,
        "choice_1" => <<<EOD
    Have been
    EOD,
        "choice_2" => <<<EOD
    Waiting
    EOD,
        "choice_3" => <<<EOD
    Have been waiting
    EOD,
        "choice_4" => <<<EOD
    Have
    EOD,
        "correct_choice" => <<<EOD
    Have been waiting
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    What is the simple future tense of the verb in the sentence “I ____ to the market tomorrow”?
    EOD,
        "choice_1" => <<<EOD
    Go
    EOD,
        "choice_2" => <<<EOD
    Going
    EOD,
        "choice_3" => <<<EOD
    Will go
    EOD,
        "choice_4" => <<<EOD
    Went
    EOD,
        "correct_choice" => <<<EOD
    Will go
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    Which of these sentences contains an irregular verb in the past tense?
    EOD,
        "choice_1" => <<<EOD
    She jumps every day.
    EOD,
        "choice_2" => <<<EOD
    He walked to the store.
    EOD,
        "choice_3" => <<<EOD
    He studied for the test.
    EOD,
        "choice_4" => <<<EOD
    She ran quickly.
    EOD,
        "correct_choice" => <<<EOD
    She ran quickly.
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    Which of these is an example of a modal verb?
    EOD,
        "choice_1" => <<<EOD
    Will
    EOD,
        "choice_2" => <<<EOD
    Walk
    EOD,
        "choice_3" => <<<EOD
    Running
    EOD,
        "choice_4" => <<<EOD
    Jumped
    EOD,
        "correct_choice" => <<<EOD
    Will
    EOD,
      ],
      [
        "topic_id" => 3,
        "question" => <<<EOD
    In the sentence “She is always running,” what type of verb is “is”?
    EOD,
        "choice_1" => <<<EOD
    Action verb
    EOD,
        "choice_2" => <<<EOD
    Linking verb
    EOD,
        "choice_3" => <<<EOD
    Helping verb
    EOD,
        "choice_4" => <<<EOD
    Modal verb
    EOD,
        "correct_choice" => <<<EOD
    Helping verb
    EOD,
      ],




      [
        "topic_id" => 4,
        "question" => <<<EOD
    What is the main function of an adjective?
    EOD,
        "choice_1" => <<<EOD
    Modifies verbs
    EOD,
        "choice_2" => <<<EOD
    Modifies nouns or pronouns
    EOD,
        "choice_3" => <<<EOD
    Modifies adverbs
    EOD,
        "choice_4" => <<<EOD
    Modifies sentences
    EOD,
        "correct_choice" => <<<EOD
    Modifies nouns or pronouns
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    Which of these words is an example of a descriptive adjective?
    EOD,
        "choice_1" => <<<EOD
    Quickly
    EOD,
        "choice_2" => <<<EOD
    Smart
    EOD,
        "choice_3" => <<<EOD
    Under
    EOD,
        "choice_4" => <<<EOD
    Many
    EOD,
        "correct_choice" => <<<EOD
    Smart
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    Which adjective would answer the question, "How many?"
    EOD,
        "choice_1" => <<<EOD
    Tall
    EOD,
        "choice_2" => <<<EOD
    Several
    EOD,
        "choice_3" => <<<EOD
    Bright
    EOD,
        "choice_4" => <<<EOD
    Beautiful
    EOD,
        "correct_choice" => <<<EOD
    Several
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    Which of the following is a demonstrative adjective?
    EOD,
        "choice_1" => <<<EOD
    This
    EOD,
        "choice_2" => <<<EOD
    His
    EOD,
        "choice_3" => <<<EOD
    Their
    EOD,
        "choice_4" => <<<EOD
    A
    EOD,
        "correct_choice" => <<<EOD
    This
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    What type of adjective is used to show possession?
    EOD,
        "choice_1" => <<<EOD
    Interrogative adjective
    EOD,
        "choice_2" => <<<EOD
    Demonstrative adjective
    EOD,
        "choice_3" => <<<EOD
    Possessive adjective
    EOD,
        "choice_4" => <<<EOD
    Quantitative adjective
    EOD,
        "correct_choice" => <<<EOD
    Possessive adjective
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    Which of these sentences contains a comparative adjective?
    EOD,
        "choice_1" => <<<EOD
    She is the most talented artist in the class.
    EOD,
        "choice_2" => <<<EOD
    He is taller than I am.
    EOD,
        "choice_3" => <<<EOD
    The dog is very fast.
    EOD,
        "choice_4" => <<<EOD
    They have some delicious cake.
    EOD,
        "correct_choice" => <<<EOD
    He is taller than I am.
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    Which adjective in the sentence "The tall, young man walked into the room" is used to describe the man’s height?
    EOD,
        "choice_1" => <<<EOD
    Tall
    EOD,
        "choice_2" => <<<EOD
    Young
    EOD,
        "choice_3" => <<<EOD
    Man
    EOD,
        "choice_4" => <<<EOD
    Room
    EOD,
        "correct_choice" => <<<EOD
    Tall
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    What is the correct order of adjectives in the sentence: "He bought a red, shiny new car"?
    EOD,
        "choice_1" => <<<EOD
    Red, shiny, new
    EOD,
        "choice_2" => <<<EOD
    Shiny, red, new
    EOD,
        "choice_3" => <<<EOD
    New, red, shiny
    EOD,
        "choice_4" => <<<EOD
    Red, new, shiny
    EOD,
        "correct_choice" => <<<EOD
    Red, shiny, new
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    Which of the following is an example of an indefinite adjective?
    EOD,
        "choice_1" => <<<EOD
    These
    EOD,
        "choice_2" => <<<EOD
    Some
    EOD,
        "choice_3" => <<<EOD
    Mine
    EOD,
        "choice_4" => <<<EOD
    His
    EOD,
        "correct_choice" => <<<EOD
    Some
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    What does an interrogative adjective do?
    EOD,
        "choice_1" => <<<EOD
    Asks a question about a noun or pronoun
    EOD,
        "choice_2" => <<<EOD
    Describes the size of a noun
    EOD,
        "choice_3" => <<<EOD
    Shows possession
    EOD,
        "choice_4" => <<<EOD
    Modifies verbs
    EOD,
        "correct_choice" => <<<EOD
    Asks a question about a noun or pronoun
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    Which adjective modifies the noun in the sentence "I found the old, dusty book"?
    EOD,
        "choice_1" => <<<EOD
    Found
    EOD,
        "choice_2" => <<<EOD
    Old
    EOD,
        "choice_3" => <<<EOD
    Book
    EOD,
        "choice_4" => <<<EOD
    Dusty
    EOD,
        "correct_choice" => <<<EOD
    Old
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    What is the function of a possessive adjective in a sentence?
    EOD,
        "choice_1" => <<<EOD
    To show action
    EOD,
        "choice_2" => <<<EOD
    To ask questions
    EOD,
        "choice_3" => <<<EOD
    To indicate ownership
    EOD,
        "choice_4" => <<<EOD
    To describe an action
    EOD,
        "correct_choice" => <<<EOD
    To indicate ownership
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    In the sentence "What color is your car?" the adjective is:
    EOD,
        "choice_1" => <<<EOD
    Color
    EOD,
        "choice_2" => <<<EOD
    Is
    EOD,
        "choice_3" => <<<EOD
    What
    EOD,
        "choice_4" => <<<EOD
    Car
    EOD,
        "correct_choice" => <<<EOD
    What
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    Which of the following is an example of a superlative adjective?
    EOD,
        "choice_1" => <<<EOD
    Tallest
    EOD,
        "choice_2" => <<<EOD
    Taller
    EOD,
        "choice_3" => <<<EOD
    More beautiful
    EOD,
        "choice_4" => <<<EOD
    Big
    EOD,
        "correct_choice" => <<<EOD
    Tallest
    EOD,
      ],
      [
        "topic_id" => 4,
        "question" => <<<EOD
    Which sentence contains an adjective phrase?
    EOD,
        "choice_1" => <<<EOD
    The dog ran fast.
    EOD,
        "choice_2" => <<<EOD
    He wore a very bright red jacket.
    EOD,
        "choice_3" => <<<EOD
    She sings beautifully.
    EOD,
        "choice_4" => <<<EOD
    The car is new.
    EOD,
        "correct_choice" => <<<EOD
    He wore a very bright red jacket.
    EOD,
      ],



      [
        "topic_id" => 5,
        "question" => <<<EOD
    Which of the following is an example of an adverb of manner?
    EOD,
        "choice_1" => <<<EOD
    She sings beautifully.
    EOD,
        "choice_2" => <<<EOD
    She sings fast.
    EOD,
        "choice_3" => <<<EOD
    She is talented.
    EOD,
        "choice_4" => <<<EOD
    She is quiet.
    EOD,
        "correct_choice" => <<<EOD
    She sings beautifully.
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    What does an adverb of time tell us?
    EOD,
        "choice_1" => <<<EOD
    It tells us how an action is performed.
    EOD,
        "choice_2" => <<<EOD
    It tells us when an action happens.
    EOD,
        "choice_3" => <<<EOD
    It tells us where an action happens.
    EOD,
        "choice_4" => <<<EOD
    It tells us how often an action happens.
    EOD,
        "correct_choice" => <<<EOD
    It tells us when an action happens.
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    Which of the following is an example of an adverb of place?
    EOD,
        "choice_1" => <<<EOD
    Always
    EOD,
        "choice_2" => <<<EOD
    Quickly
    EOD,
        "choice_3" => <<<EOD
    Inside
    EOD,
        "choice_4" => <<<EOD
    Sometimes
    EOD,
        "correct_choice" => <<<EOD
    Inside
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    What does an adverb of degree describe?
    EOD,
        "choice_1" => <<<EOD
    The frequency of an action.
    EOD,
        "choice_2" => <<<EOD
    The place where an action happens.
    EOD,
        "choice_3" => <<<EOD
    The intensity or extent of an action, adjective, or adverb.
    EOD,
        "choice_4" => <<<EOD
    The time when an action happens.
    EOD,
        "correct_choice" => <<<EOD
    The intensity or extent of an action, adjective, or adverb.
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    Which of these is an adverb of frequency?
    EOD,
        "choice_1" => <<<EOD
    Never
    EOD,
        "choice_2" => <<<EOD
    Loudly
    EOD,
        "choice_3" => <<<EOD
    Beautifully
    EOD,
        "choice_4" => <<<EOD
    Near
    EOD,
        "correct_choice" => <<<EOD
    Never
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    In the sentence "He will probably come to the party," what type of adverb is probably?
    EOD,
        "choice_1" => <<<EOD
    Adverb of manner
    EOD,
        "choice_2" => <<<EOD
    Adverb of time
    EOD,
        "choice_3" => <<<EOD
    Adverb of place
    EOD,
        "choice_4" => <<<EOD
    Adverb of probability
    EOD,
        "correct_choice" => <<<EOD
    Adverb of probability
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    Which sentence contains an adverb of manner?
    EOD,
        "choice_1" => <<<EOD
    She always arrives early.
    EOD,
        "choice_2" => <<<EOD
    The movie ended quickly.
    EOD,
        "choice_3" => <<<EOD
    I visited her yesterday.
    EOD,
        "choice_4" => <<<EOD
    He is tall and thin.
    EOD,
        "correct_choice" => <<<EOD
    The movie ended quickly.
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    Which of the following is an example of an adverb of degree?
    EOD,
        "choice_1" => <<<EOD
    Very
    EOD,
        "choice_2" => <<<EOD
    Always
    EOD,
        "choice_3" => <<<EOD
    Near
    EOD,
        "choice_4" => <<<EOD
    Here
    EOD,
        "correct_choice" => <<<EOD
    Very
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    Identify the adverb in the sentence: "She sang loudly."
    EOD,
        "choice_1" => <<<EOD
    Sang
    EOD,
        "choice_2" => <<<EOD
    Loudly
    EOD,
        "choice_3" => <<<EOD
    She
    EOD,
        "choice_4" => <<<EOD
    None
    EOD,
        "correct_choice" => <<<EOD
    Loudly
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    Which sentence contains an adverb of time?
    EOD,
        "choice_1" => <<<EOD
    She sings beautifully.
    EOD,
        "choice_2" => <<<EOD
    They arrive every day at 9 AM.
    EOD,
        "choice_3" => <<<EOD
    The kids are playing outside.
    EOD,
        "choice_4" => <<<EOD
    I enjoy reading.
    EOD,
        "correct_choice" => <<<EOD
    They arrive every day at 9 AM.
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    What is the adverb in the sentence "I will go to the store soon"?
    EOD,
        "choice_1" => <<<EOD
    Go
    EOD,
        "choice_2" => <<<EOD
    Store
    EOD,
        "choice_3" => <<<EOD
    Soon
    EOD,
        "choice_4" => <<<EOD
    To
    EOD,
        "correct_choice" => <<<EOD
    Soon
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    In the sentence "She dances gracefully," what is the function of the word gracefully?
    EOD,
        "choice_1" => <<<EOD
    It modifies the verb.
    EOD,
        "choice_2" => <<<EOD
    It modifies an adjective.
    EOD,
        "choice_3" => <<<EOD
    It modifies another adverb.
    EOD,
        "choice_4" => <<<EOD
    It modifies a noun.
    EOD,
        "correct_choice" => <<<EOD
    It modifies the verb.
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    Which of the following is NOT an adverb?
    EOD,
        "choice_1" => <<<EOD
    Often
    EOD,
        "choice_2" => <<<EOD
    Never
    EOD,
        "choice_3" => <<<EOD
    Beautiful
    EOD,
        "choice_4" => <<<EOD
    Quickly
    EOD,
        "correct_choice" => <<<EOD
    Beautiful
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    What type of adverb is used in this sentence: "He eats his food quite slowly"?
    EOD,
        "choice_1" => <<<EOD
    Adverb of frequency
    EOD,
        "choice_2" => <<<EOD
    Adverb of place
    EOD,
        "choice_3" => <<<EOD
    Adverb of manner
    EOD,
        "choice_4" => <<<EOD
    Adverb of degree
    EOD,
        "correct_choice" => <<<EOD
    Adverb of degree
    EOD,
      ],

      [
        "topic_id" => 5,
        "question" => <<<EOD
    Which of the following sentences has an adverb modifying an adjective?
    EOD,
        "choice_1" => <<<EOD
    She plays the piano well.
    EOD,
        "choice_2" => <<<EOD
    The movie is extremely long.
    EOD,
        "choice_3" => <<<EOD
    I always walk to school.
    EOD,
        "choice_4" => <<<EOD
    The dog ran outside.
    EOD,
        "correct_choice" => <<<EOD
    The movie is extremely long.
    EOD,
      ],



      [
        "topic_id" => 6,
        "question" => <<<EOD
  Which of these sentences contains a preposition?
  EOD,
        "choice_1" => <<<EOD
  The dog is sleeping.
  EOD,
        "choice_2" => <<<EOD
  He ran to the store.
  EOD,
        "choice_3" => <<<EOD
  She is happy.
  EOD,
        "choice_4" => <<<EOD
  I sing songs.
  EOD,
        "correct_choice" => <<<EOD
  He ran to the store.
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  What is the preposition in the sentence: "The book is on the table"?
  EOD,
        "choice_1" => <<<EOD
  Book
  EOD,
        "choice_2" => <<<EOD
  Table
  EOD,
        "choice_3" => <<<EOD
  Is
  EOD,
        "choice_4" => <<<EOD
  On
  EOD,
        "correct_choice" => <<<EOD
  On
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  Which of these is a preposition of time?
  EOD,
        "choice_1" => <<<EOD
  In
  EOD,
        "choice_2" => <<<EOD
  Across
  EOD,
        "choice_3" => <<<EOD
  Behind
  EOD,
        "choice_4" => <<<EOD
  During
  EOD,
        "correct_choice" => <<<EOD
  During
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  Choose the correct preposition: "The kids are playing ___ the yard."
  EOD,
        "choice_1" => <<<EOD
  At
  EOD,
        "choice_2" => <<<EOD
  In
  EOD,
        "choice_3" => <<<EOD
  Under
  EOD,
        "choice_4" => <<<EOD
  On
  EOD,
        "correct_choice" => <<<EOD
  In
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  Which of the following sentences contains a prepositional phrase?
  EOD,
        "choice_1" => <<<EOD
  I like to swim in the ocean.
  EOD,
        "choice_2" => <<<EOD
  She works at the office.
  EOD,
        "choice_3" => <<<EOD
  He is going home.
  EOD,
        "choice_4" => <<<EOD
  We are playing basketball.
  EOD,
        "correct_choice" => <<<EOD
  She works at the office.
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  Which preposition is used to show place?
  EOD,
        "choice_1" => <<<EOD
  By
  EOD,
        "choice_2" => <<<EOD
  Across
  EOD,
        "choice_3" => <<<EOD
  Before
  EOD,
        "choice_4" => <<<EOD
  Between
  EOD,
        "correct_choice" => <<<EOD
  Between
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  In the sentence "I went to the park after school," which word is the preposition?
  EOD,
        "choice_1" => <<<EOD
  Went
  EOD,
        "choice_2" => <<<EOD
  Park
  EOD,
        "choice_3" => <<<EOD
  After
  EOD,
        "choice_4" => <<<EOD
  School
  EOD,
        "correct_choice" => <<<EOD
  After
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  Choose the correct preposition: "She was standing ___ the door."
  EOD,
        "choice_1" => <<<EOD
  In
  EOD,
        "choice_2" => <<<EOD
  At
  EOD,
        "choice_3" => <<<EOD
  On
  EOD,
        "choice_4" => <<<EOD
  By
  EOD,
        "correct_choice" => <<<EOD
  At
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  What type of preposition is used in the sentence: "I did it because of him"?
  EOD,
        "choice_1" => <<<EOD
  Preposition of place
  EOD,
        "choice_2" => <<<EOD
  Preposition of manner
  EOD,
        "choice_3" => <<<EOD
  Preposition of time
  EOD,
        "choice_4" => <<<EOD
  Preposition of cause
  EOD,
        "correct_choice" => <<<EOD
  Preposition of cause
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  Which sentence uses a compound preposition?
  EOD,
        "choice_1" => <<<EOD
  The cat is on the roof.
  EOD,
        "choice_2" => <<<EOD
  The car is parked near the house.
  EOD,
        "choice_3" => <<<EOD
  He is going inside the building.
  EOD,
        "choice_4" => <<<EOD
  She went out of the room.
  EOD,
        "correct_choice" => <<<EOD
  She went out of the room.
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  In the sentence "I will meet you at the restaurant," which type of preposition is used?
  EOD,
        "choice_1" => <<<EOD
  Time
  EOD,
        "choice_2" => <<<EOD
  Place
  EOD,
        "choice_3" => <<<EOD
  Manner
  EOD,
        "choice_4" => <<<EOD
  Cause
  EOD,
        "correct_choice" => <<<EOD
  Place
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  Which of the following is a phrasal preposition?
  EOD,
        "choice_1" => <<<EOD
  Behind
  EOD,
        "choice_2" => <<<EOD
  In front of
  EOD,
        "choice_3" => <<<EOD
  At
  EOD,
        "choice_4" => <<<EOD
  On
  EOD,
        "correct_choice" => <<<EOD
  In front of
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  What does the preposition for express in the sentence "This gift is for you"?
  EOD,
        "choice_1" => <<<EOD
  Time
  EOD,
        "choice_2" => <<<EOD
  Reason
  EOD,
        "choice_3" => <<<EOD
  Purpose
  EOD,
        "choice_4" => <<<EOD
  Direction
  EOD,
        "correct_choice" => <<<EOD
  Purpose
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  Which preposition is used to express manner in the sentence "He sings with passion"?
  EOD,
        "choice_1" => <<<EOD
  With
  EOD,
        "choice_2" => <<<EOD
  In
  EOD,
        "choice_3" => <<<EOD
  By
  EOD,
        "choice_4" => <<<EOD
  On
  EOD,
        "correct_choice" => <<<EOD
  With
  EOD,
      ],

      [
        "topic_id" => 6,
        "question" => <<<EOD
  Choose the correct preposition: "They are sitting ___ the table."
  EOD,
        "choice_1" => <<<EOD
  In
  EOD,
        "choice_2" => <<<EOD
  At
  EOD,
        "choice_3" => <<<EOD
  Under
  EOD,
        "choice_4" => <<<EOD
  By
  EOD,
        "correct_choice" => <<<EOD
  At
  EOD,
      ],



      [
        "topic_id" => 7,
        "question" => <<<EOD
Which of the following is a coordinating conjunction?
EOD,
        "choice_1" => <<<EOD
for
EOD,
        "choice_2" => <<<EOD
because
EOD,
        "choice_3" => <<<EOD
although
EOD,
        "choice_4" => <<<EOD
neither
EOD,
        "correct_choice" => <<<EOD
for
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Choose the correct conjunction: "She likes coffee, ___ she prefers tea."
EOD,
        "choice_1" => <<<EOD
and
EOD,
        "choice_2" => <<<EOD
but
EOD,
        "choice_3" => <<<EOD
or
EOD,
        "choice_4" => <<<EOD
so
EOD,
        "correct_choice" => <<<EOD
but
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Which conjunction is used in the sentence: "I will stay home ___ it rains."
EOD,
        "choice_1" => <<<EOD
because
EOD,
        "choice_2" => <<<EOD
if
EOD,
        "choice_3" => <<<EOD
although
EOD,
        "choice_4" => <<<EOD
and
EOD,
        "correct_choice" => <<<EOD
if
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Which of these sentences contains a correlative conjunction?
EOD,
        "choice_1" => <<<EOD
She likes both cats and dogs.
EOD,
        "choice_2" => <<<EOD
He ran quickly but didn’t catch the bus.
EOD,
        "choice_3" => <<<EOD
I will read the book or watch the movie.
EOD,
        "choice_4" => <<<EOD
I am tired so I’ll rest.
EOD,
        "correct_choice" => <<<EOD
She likes both cats and dogs.
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
What is the function of the conjunction "because" in the sentence "I am studying because I have an exam"?
EOD,
        "choice_1" => <<<EOD
Time
EOD,
        "choice_2" => <<<EOD
Reason
EOD,
        "choice_3" => <<<EOD
Contrast
EOD,
        "choice_4" => <<<EOD
Condition
EOD,
        "correct_choice" => <<<EOD
Reason
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Which of the following is a subordinating conjunction?
EOD,
        "choice_1" => <<<EOD
and
EOD,
        "choice_2" => <<<EOD
but
EOD,
        "choice_3" => <<<EOD
because
EOD,
        "choice_4" => <<<EOD
or
EOD,
        "correct_choice" => <<<EOD
because
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Which sentence uses the conjunction "yet" correctly?
EOD,
        "choice_1" => <<<EOD
She studied hard yet failed the test.
EOD,
        "choice_2" => <<<EOD
He is busy yet he will join us.
EOD,
        "choice_3" => <<<EOD
I can go to the party yet I don’t feel like it.
EOD,
        "choice_4" => <<<EOD
Both answers are correct.
EOD,
        "correct_choice" => <<<EOD
Both answers are correct.
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Choose the correct conjunction: "He has been practicing piano ___ he was a child."
EOD,
        "choice_1" => <<<EOD
since
EOD,
        "choice_2" => <<<EOD
for
EOD,
        "choice_3" => <<<EOD
because
EOD,
        "choice_4" => <<<EOD
during
EOD,
        "correct_choice" => <<<EOD
since
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Which of these is a correlative conjunction?
EOD,
        "choice_1" => <<<EOD
for
EOD,
        "choice_2" => <<<EOD
both ... and
EOD,
        "choice_3" => <<<EOD
because
EOD,
        "choice_4" => <<<EOD
when
EOD,
        "correct_choice" => <<<EOD
both ... and
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Choose the correct conjunction for the blank: "I want to go out, ___ it’s raining."
EOD,
        "choice_1" => <<<EOD
but
EOD,
        "choice_2" => <<<EOD
because
EOD,
        "choice_3" => <<<EOD
although
EOD,
        "choice_4" => <<<EOD
so
EOD,
        "correct_choice" => <<<EOD
although
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Which conjunction is used in the sentence: "I will either stay home ___ go to the gym"?
EOD,
        "choice_1" => <<<EOD
for
EOD,
        "choice_2" => <<<EOD
or
EOD,
        "choice_3" => <<<EOD
but
EOD,
        "choice_4" => <<<EOD
and
EOD,
        "correct_choice" => <<<EOD
or
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
What is the function of the conjunction "or" in the sentence "You can have coffee or tea"?
EOD,
        "choice_1" => <<<EOD
Condition
EOD,
        "choice_2" => <<<EOD
Choice
EOD,
        "choice_3" => <<<EOD
Cause
EOD,
        "choice_4" => <<<EOD
Contrast
EOD,
        "correct_choice" => <<<EOD
Choice
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Choose the correct correlative conjunction: "I have seen ___ the movie ___ the book."
EOD,
        "choice_1" => <<<EOD
neither ... nor
EOD,
        "choice_2" => <<<EOD
not only ... but also
EOD,
        "choice_3" => <<<EOD
both ... and
EOD,
        "choice_4" => <<<EOD
whether ... or
EOD,
        "correct_choice" => <<<EOD
both ... and
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
What is the role of the conjunction "so" in the sentence "He was tired, so he went to bed early"?
EOD,
        "choice_1" => <<<EOD
Time
EOD,
        "choice_2" => <<<EOD
Cause
EOD,
        "choice_3" => <<<EOD
Result
EOD,
        "choice_4" => <<<EOD
Condition
EOD,
        "correct_choice" => <<<EOD
Result
EOD,
      ],
      [
        "topic_id" => 7,
        "question" => <<<EOD
Which conjunction is used in the sentence: "I will go to the party ___ I don’t feel well"?
EOD,
        "choice_1" => <<<EOD
even though
EOD,
        "choice_2" => <<<EOD
because
EOD,
        "choice_3" => <<<EOD
unless
EOD,
        "choice_4" => <<<EOD
but
EOD,
        "correct_choice" => <<<EOD
even though
EOD,
      ],



      [
        "topic_id" => 8,
        "question" => <<<EOD
    What is the primary purpose of an interjection?
    EOD,
        "choice_1" => <<<EOD
    To describe actions in a sentence
    EOD,
        "choice_2" => <<<EOD
    To express strong emotions or reactions
    EOD,
        "choice_3" => <<<EOD
    To link clauses or phrases
    EOD,
        "choice_4" => <<<EOD
    To modify nouns
    EOD,
        "correct_choice" => <<<EOD
    To express strong emotions or reactions
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    Which of the following is an example of an interjection?
    EOD,
        "choice_1" => <<<EOD
    Quickly
    EOD,
        "choice_2" => <<<EOD
    And
    EOD,
        "choice_3" => <<<EOD
    Wow!
    EOD,
        "choice_4" => <<<EOD
    Beautiful
    EOD,
        "correct_choice" => <<<EOD
    Wow!
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    True or False: Interjections are always grammatically connected to the main sentence.
    EOD,
        "choice_1" => <<<EOD
    True
    EOD,
        "choice_2" => <<<EOD
    False
    EOD,
        "choice_3" => <<<EOD
    Sometimes
    EOD,
        "choice_4" => <<<EOD
    Only in questions
    EOD,
        "correct_choice" => <<<EOD
    False
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    In which type of writing are interjections more commonly used?
    EOD,
        "choice_1" => <<<EOD
    Formal writing
    EOD,
        "choice_2" => <<<EOD
    Informal writing
    EOD,
        "choice_3" => <<<EOD
    Scientific reports
    EOD,
        "choice_4" => <<<EOD
    Poetry only
    EOD,
        "correct_choice" => <<<EOD
    Informal writing
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    Which interjection would best express surprise?
    EOD,
        "choice_1" => <<<EOD
    Alas!
    EOD,
        "choice_2" => <<<EOD
    Hooray!
    EOD,
        "choice_3" => <<<EOD
    Wow!
    EOD,
        "choice_4" => <<<EOD
    Boo!
    EOD,
        "correct_choice" => <<<EOD
    Wow!
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    Which punctuation mark is most often used after an interjection to show strong emotion?
    EOD,
        "choice_1" => <<<EOD
    Period
    EOD,
        "choice_2" => <<<EOD
    Comma
    EOD,
        "choice_3" => <<<EOD
    Exclamation point
    EOD,
        "choice_4" => <<<EOD
    Question mark
    EOD,
        "correct_choice" => <<<EOD
    Exclamation point
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    "Oops! I didn’t mean to do that." What emotion is the interjection "Oops!" expressing?
    EOD,
        "choice_1" => <<<EOD
    Anger
    EOD,
        "choice_2" => <<<EOD
    Joy
    EOD,
        "choice_3" => <<<EOD
    Surprise
    EOD,
        "choice_4" => <<<EOD
    Regret or mistake
    EOD,
        "correct_choice" => <<<EOD
    Regret or mistake
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    Which interjection is often used to get someone’s attention?
    EOD,
        "choice_1" => <<<EOD
    Hey!
    EOD,
        "choice_2" => <<<EOD
    Alas!
    EOD,
        "choice_3" => <<<EOD
    Bravo!
    EOD,
        "choice_4" => <<<EOD
    Ouch!
    EOD,
        "correct_choice" => <<<EOD
    Hey!
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    True or False: Interjections are commonly used in academic and professional writing.
    EOD,
        "choice_1" => <<<EOD
    True
    EOD,
        "choice_2" => <<<EOD
    False
    EOD,
        "choice_3" => <<<EOD
    Only in headlines
    EOD,
        "choice_4" => <<<EOD
    Only in greetings
    EOD,
        "correct_choice" => <<<EOD
    False
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    What is an onomatopoeic interjection?
    EOD,
        "choice_1" => <<<EOD
    An interjection that mimics sounds
    EOD,
        "choice_2" => <<<EOD
    An interjection that shows excitement
    EOD,
        "choice_3" => <<<EOD
    An interjection that expresses sadness
    EOD,
        "choice_4" => <<<EOD
    An interjection that links clauses
    EOD,
        "correct_choice" => <<<EOD
    An interjection that mimics sounds
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    Which of these interjections would express disappointment?
    EOD,
        "choice_1" => <<<EOD
    Hooray!
    EOD,
        "choice_2" => <<<EOD
    Oh no!
    EOD,
        "choice_3" => <<<EOD
    Yippee!
    EOD,
        "choice_4" => <<<EOD
    Bingo!
    EOD,
        "correct_choice" => <<<EOD
    Oh no!
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    Which interjection shows a realization or sudden understanding?
    EOD,
        "choice_1" => <<<EOD
    Ouch!
    EOD,
        "choice_2" => <<<EOD
    Yay!
    EOD,
        "choice_3" => <<<EOD
    Aha!
    EOD,
        "choice_4" => <<<EOD
    Alas!
    EOD,
        "correct_choice" => <<<EOD
    Aha!
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    "Yikes! That was a close call." What emotion is the interjection "Yikes!" expressing?
    EOD,
        "choice_1" => <<<EOD
    Joy
    EOD,
        "choice_2" => <<<EOD
    Fear or alarm
    EOD,
        "choice_3" => <<<EOD
    Excitement
    EOD,
        "choice_4" => <<<EOD
    Sadness
    EOD,
        "correct_choice" => <<<EOD
    Fear or alarm
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    In the sentence "Well, I suppose you’re right," what is the purpose of the interjection "Well"?
    EOD,
        "choice_1" => <<<EOD
    To show hesitation
    EOD,
        "choice_2" => <<<EOD
    To express anger
    EOD,
        "choice_3" => <<<EOD
    To add a command
    EOD,
        "choice_4" => <<<EOD
    To mimic a sound
    EOD,
        "correct_choice" => <<<EOD
    To show hesitation
    EOD,
      ],
      [
        "topic_id" => 8,
        "question" => <<<EOD
    Which of the following interjections would best be used to express joy?
    EOD,
        "choice_1" => <<<EOD
    Wow!
    EOD,
        "choice_2" => <<<EOD
    Boo!
    EOD,
        "choice_3" => <<<EOD
    Hooray!
    EOD,
        "choice_4" => <<<EOD
    Oh no!
    EOD,
        "correct_choice" => <<<EOD
    Hooray!
    EOD,
      ],



      [
        "topic_id" => 9,
        "question" => <<<EOD
  Which article should be used for specific, previously mentioned nouns?
  EOD,
        "choice_1" => <<<EOD
  A
  EOD,
        "choice_2" => <<<EOD
  An
  EOD,
        "choice_3" => <<<EOD
  The
  EOD,
        "choice_4" => <<<EOD
  No article
  EOD,
        "correct_choice" => <<<EOD
  The
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Choose the correct sentence:
  EOD,
        "choice_1" => <<<EOD
  I have a apple in my bag.
  EOD,
        "choice_2" => <<<EOD
  I have an apple in my bag.
  EOD,
        "choice_3" => <<<EOD
  I have the apple in my bag.
  EOD,
        "choice_4" => <<<EOD
  I have apple in my bag.
  EOD,
        "correct_choice" => <<<EOD
  I have an apple in my bag.
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Which article is typically used with unique nouns?
  EOD,
        "choice_1" => <<<EOD
  A
  EOD,
        "choice_2" => <<<EOD
  An
  EOD,
        "choice_3" => <<<EOD
  The
  EOD,
        "choice_4" => <<<EOD
  No article
  EOD,
        "correct_choice" => <<<EOD
  The
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Which sentence uses the indefinite article correctly?
  EOD,
        "choice_1" => <<<EOD
  I saw a elephant at the zoo.
  EOD,
        "choice_2" => <<<EOD
  I saw an elephant at the zoo.
  EOD,
        "choice_3" => <<<EOD
  I saw the elephant at the zoo.
  EOD,
        "choice_4" => <<<EOD
  I saw elephant at the zoo.
  EOD,
        "correct_choice" => <<<EOD
  I saw an elephant at the zoo.
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Select the correct sentence with an article:
  EOD,
        "choice_1" => <<<EOD
  She is teacher.
  EOD,
        "choice_2" => <<<EOD
  She is a teacher.
  EOD,
        "choice_3" => <<<EOD
  She is an teacher.
  EOD,
        "choice_4" => <<<EOD
  She is the teacher.
  EOD,
        "correct_choice" => <<<EOD
  She is a teacher.
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Which of the following does NOT need an article?
  EOD,
        "choice_1" => <<<EOD
  Dogs are loyal animals.
  EOD,
        "choice_2" => <<<EOD
  The dogs are loyal animals.
  EOD,
        "choice_3" => <<<EOD
  A dogs are loyal animals.
  EOD,
        "choice_4" => <<<EOD
  An dogs are loyal animals.
  EOD,
        "correct_choice" => <<<EOD
  Dogs are loyal animals.
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Which article would you use with the word “umbrella”?
  EOD,
        "choice_1" => <<<EOD
  A
  EOD,
        "choice_2" => <<<EOD
  An
  EOD,
        "choice_3" => <<<EOD
  The
  EOD,
        "choice_4" => <<<EOD
  No article
  EOD,
        "correct_choice" => <<<EOD
  An
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Choose the sentence that does not use an article:
  EOD,
        "choice_1" => <<<EOD
  Patience is a virtue.
  EOD,
        "choice_2" => <<<EOD
  A patience is virtue.
  EOD,
        "choice_3" => <<<EOD
  The patience is virtue.
  EOD,
        "choice_4" => <<<EOD
  Patience is virtue.
  EOD,
        "correct_choice" => <<<EOD
  Patience is a virtue.
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  What is the article in "the United States" called?
  EOD,
        "choice_1" => <<<EOD
  Definite article
  EOD,
        "choice_2" => <<<EOD
  Indefinite article
  EOD,
        "choice_3" => <<<EOD
  No article
  EOD,
        "choice_4" => <<<EOD
  Zero article
  EOD,
        "correct_choice" => <<<EOD
  Definite article
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Select the sentence that uses a zero article correctly:
  EOD,
        "choice_1" => <<<EOD
  Life is unpredictable.
  EOD,
        "choice_2" => <<<EOD
  The life is unpredictable.
  EOD,
        "choice_3" => <<<EOD
  A life is unpredictable.
  EOD,
        "choice_4" => <<<EOD
  An life is unpredictable.
  EOD,
        "correct_choice" => <<<EOD
  Life is unpredictable.
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Which article is generally used before a consonant sound?
  EOD,
        "choice_1" => <<<EOD
  A
  EOD,
        "choice_2" => <<<EOD
  An
  EOD,
        "choice_3" => <<<EOD
  The
  EOD,
        "choice_4" => <<<EOD
  No article
  EOD,
        "correct_choice" => <<<EOD
  A
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Choose the correct use of "the" in the following sentence:
  EOD,
        "choice_1" => <<<EOD
  The Nile River is the longest river in the world.
  EOD,
        "choice_2" => <<<EOD
  Nile River is longest river in world.
  EOD,
        "choice_3" => <<<EOD
  The Nile River is a longest river in the world.
  EOD,
        "choice_4" => <<<EOD
  A Nile River is the longest river in the world.
  EOD,
        "correct_choice" => <<<EOD
  The Nile River is the longest river in the world.
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Which of these sentences uses "the" correctly?
  EOD,
        "choice_1" => <<<EOD
  I need to go to bank.
  EOD,
        "choice_2" => <<<EOD
  I need to go to the bank.
  EOD,
        "choice_3" => <<<EOD
  I need to go to a bank.
  EOD,
        "choice_4" => <<<EOD
  I need to go bank.
  EOD,
        "correct_choice" => <<<EOD
  I need to go to the bank.
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  Choose the correct article for this sentence: "He saw ___ apple tree in the yard."
  EOD,
        "choice_1" => <<<EOD
  A
  EOD,
        "choice_2" => <<<EOD
  An
  EOD,
        "choice_3" => <<<EOD
  The
  EOD,
        "choice_4" => <<<EOD
  No article
  EOD,
        "correct_choice" => <<<EOD
  An
  EOD,
      ],
      [
        "topic_id" => 9,
        "question" => <<<EOD
  In the sentence "She bought an hourglass," the word "an" is used because:
  EOD,
        "choice_1" => <<<EOD
  Hourglass starts with a vowel sound.
  EOD,
        "choice_2" => <<<EOD
  Hourglass starts with a consonant sound.
  EOD,
        "choice_3" => <<<EOD
  Hourglass needs no article.
  EOD,
        "choice_4" => <<<EOD
  Hourglass is a specific noun.
  EOD,
        "correct_choice" => <<<EOD
  Hourglass starts with a vowel sound.
  EOD,
      ],



      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which of these sentences is a declarative sentence?
    EOD,
        "choice_1" => <<<EOD
    "What time is the meeting?"
    EOD,
        "choice_2" => <<<EOD
    "Please close the window."
    EOD,
        "choice_3" => <<<EOD
    "The sun rises in the east."
    EOD,
        "choice_4" => <<<EOD
    "How are you?"
    EOD,
        "correct_choice" => <<<EOD
    The sun rises in the east.
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    What punctuation mark is used at the end of an interrogative sentence?
    EOD,
        "choice_1" => <<<EOD
    Period (.)
    EOD,
        "choice_2" => <<<EOD
    Exclamation mark (!)
    EOD,
        "choice_3" => <<<EOD
    Comma (,)
    EOD,
        "choice_4" => <<<EOD
    Question mark (?)
    EOD,
        "correct_choice" => <<<EOD
    Question mark (?)
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which of the following is an imperative sentence?
    EOD,
        "choice_1" => <<<EOD
    "The dog is barking loudly."
    EOD,
        "choice_2" => <<<EOD
    "Please bring me a glass of water."
    EOD,
        "choice_3" => <<<EOD
    "What time does the bus arrive?"
    EOD,
        "choice_4" => <<<EOD
    "I love reading books."
    EOD,
        "correct_choice" => <<<EOD
    Please bring me a glass of water.
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which of these sentences is an exclamatory sentence?
    EOD,
        "choice_1" => <<<EOD
    "He is running fast."
    EOD,
        "choice_2" => <<<EOD
    "Wow! That was an amazing performance!"
    EOD,
        "choice_3" => <<<EOD
    "The movie starts at 8 PM."
    EOD,
        "choice_4" => <<<EOD
    "Are you coming to the party?"
    EOD,
        "correct_choice" => <<<EOD
    Wow! That was an amazing performance!
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    What is the main purpose of an interrogative sentence?
    EOD,
        "choice_1" => <<<EOD
    To provide information
    EOD,
        "choice_2" => <<<EOD
    To ask a question
    EOD,
        "choice_3" => <<<EOD
    To give a command
    EOD,
        "choice_4" => <<<EOD
    To express emotion
    EOD,
        "correct_choice" => <<<EOD
    To ask a question
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which of the following is a declarative sentence?
    EOD,
        "choice_1" => <<<EOD
    "Can you help me?"
    EOD,
        "choice_2" => <<<EOD
    "What a beautiful day!"
    EOD,
        "choice_3" => <<<EOD
    "Please finish your homework."
    EOD,
        "choice_4" => <<<EOD
    "She enjoys painting."
    EOD,
        "correct_choice" => <<<EOD
    She enjoys painting.
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    What punctuation mark is used at the end of an imperative sentence?
    EOD,
        "choice_1" => <<<EOD
    Question mark (?)
    EOD,
        "choice_2" => <<<EOD
    Period (.) or Exclamation mark (!)
    EOD,
        "choice_3" => <<<EOD
    Colon (:)
    EOD,
        "choice_4" => <<<EOD
    Comma (,)
    EOD,
        "correct_choice" => <<<EOD
    Period (.) or Exclamation mark (!)
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which sentence is an example of an imperative sentence?
    EOD,
        "choice_1" => <<<EOD
    "I have to go to the store."
    EOD,
        "choice_2" => <<<EOD
    "Please pass me the salt."
    EOD,
        "choice_3" => <<<EOD
    "Where are you going?"
    EOD,
        "choice_4" => <<<EOD
    "We will leave soon."
    EOD,
        "correct_choice" => <<<EOD
    Please pass me the salt.
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which of the following is an exclamatory sentence?
    EOD,
        "choice_1" => <<<EOD
    "She is wearing a red dress."
    EOD,
        "choice_2" => <<<EOD
    "How wonderful that you are here!"
    EOD,
        "choice_3" => <<<EOD
    "Are you feeling better?"
    EOD,
        "choice_4" => <<<EOD
    "It is raining outside."
    EOD,
        "correct_choice" => <<<EOD
    How wonderful that you are here!
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    What is the purpose of a declarative sentence?
    EOD,
        "choice_1" => <<<EOD
    To ask a question
    EOD,
        "choice_2" => <<<EOD
    To express strong emotions
    EOD,
        "choice_3" => <<<EOD
    To make a statement
    EOD,
        "choice_4" => <<<EOD
    To give a command
    EOD,
        "correct_choice" => <<<EOD
    To make a statement
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which of these sentences is an interrogative sentence?
    EOD,
        "choice_1" => <<<EOD
    "I love playing basketball."
    EOD,
        "choice_2" => <<<EOD
    "What time does the concert start?"
    EOD,
        "choice_3" => <<<EOD
    "Please close the door."
    EOD,
        "choice_4" => <<<EOD
    "The dog is barking loudly."
    EOD,
        "correct_choice" => <<<EOD
    What time does the concert start?
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which sentence is an example of an exclamatory sentence?
    EOD,
        "choice_1" => <<<EOD
    "I don’t want to go."
    EOD,
        "choice_2" => <<<EOD
    "Wow, that was an incredible performance!"
    EOD,
        "choice_3" => <<<EOD
    "Please clean your room."
    EOD,
        "choice_4" => <<<EOD
    "We are going to the beach tomorrow."
    EOD,
        "correct_choice" => <<<EOD
    Wow, that was an incredible performance!
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which sentence is a declarative sentence?
    EOD,
        "choice_1" => <<<EOD
    "Can you believe how much it snowed?"
    EOD,
        "choice_2" => <<<EOD
    "My brother is studying for the exam."
    EOD,
        "choice_3" => <<<EOD
    "What time is the meeting?"
    EOD,
        "choice_4" => <<<EOD
    "Are you going to the concert?"
    EOD,
        "correct_choice" => <<<EOD
    My brother is studying for the exam.
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    Which of these is a correct imperative sentence?
    EOD,
        "choice_1" => <<<EOD
    "Please stop talking."
    EOD,
        "choice_2" => <<<EOD
    "Stop talking please."
    EOD,
        "choice_3" => <<<EOD
    "You stop talking."
    EOD,
        "choice_4" => <<<EOD
    "Stop please talking."
    EOD,
        "correct_choice" => <<<EOD
    Please stop talking.
    EOD,
      ],
      [
        "topic_id" => 10,
        "question" => <<<EOD
    What punctuation mark should be used at the end of an exclamatory sentence?
    EOD,
        "choice_1" => <<<EOD
    Period (.).
    EOD,
        "choice_2" => <<<EOD
    Question mark (?).
    EOD,
        "choice_3" => <<<EOD
    Exclamation mark (!)
    EOD,
        "choice_4" => <<<EOD
    Comma (,)
    EOD,
        "correct_choice" => <<<EOD
    Exclamation mark (!)
    EOD,
      ],


      [
        "topic_id" => 11,
        "question" => <<<EOD
    Which punctuation mark is used to end a declarative sentence?
    EOD,
        "choice_1" => <<<EOD
    Period
    EOD,
        "choice_2" => <<<EOD
    Question Mark
    EOD,
        "choice_3" => <<<EOD
    Exclamation Point
    EOD,
        "choice_4" => <<<EOD
    Comma
    EOD,
        "correct_choice" => <<<EOD
    Period
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    Which of the following sentences ends with a question mark?
    EOD,
        "choice_1" => <<<EOD
    She is coming to the party.
    EOD,
        "choice_2" => <<<EOD
    Do you want to go with us?
    EOD,
        "choice_3" => <<<EOD
    What a beautiful sunset.
    EOD,
        "choice_4" => <<<EOD
    He studied all night.
    EOD,
        "correct_choice" => <<<EOD
    Do you want to go with us?
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    Which punctuation mark is used to indicate strong emotion or excitement?
    EOD,
        "choice_1" => <<<EOD
    Period
    EOD,
        "choice_2" => <<<EOD
    Question Mark
    EOD,
        "choice_3" => <<<EOD
    Exclamation Point
    EOD,
        "choice_4" => <<<EOD
    Semicolon
    EOD,
        "correct_choice" => <<<EOD
    Exclamation Point
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    What is the correct punctuation mark to use at the end of the sentence: "How are you today"?
    EOD,
        "choice_1" => <<<EOD
    Period
    EOD,
        "choice_2" => <<<EOD
    Question Mark
    EOD,
        "choice_3" => <<<EOD
    Exclamation Point
    EOD,
        "choice_4" => <<<EOD
    Semicolon
    EOD,
        "correct_choice" => <<<EOD
    Question Mark
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    Which sentence correctly uses commas to separate items in a list?
    EOD,
        "choice_1" => <<<EOD
    I bought apples bananas oranges and grapes.
    EOD,
        "choice_2" => <<<EOD
    I bought apples, bananas, oranges, and grapes.
    EOD,
        "choice_3" => <<<EOD
    I bought apples bananas, oranges and grapes.
    EOD,
        "choice_4" => <<<EOD
    I bought apples, bananas oranges, and grapes.
    EOD,
        "correct_choice" => <<<EOD
    I bought apples, bananas, oranges, and grapes.
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    When should you use a semicolon?
    EOD,
        "choice_1" => <<<EOD
    To separate independent clauses without a conjunction
    EOD,
        "choice_2" => <<<EOD
    To end a sentence
    EOD,
        "choice_3" => <<<EOD
    To introduce a quote
    EOD,
        "choice_4" => <<<EOD
    To separate items in a list
    EOD,
        "correct_choice" => <<<EOD
    To separate independent clauses without a conjunction
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    How do you properly use a colon?
    EOD,
        "choice_1" => <<<EOD
    To introduce a list or explanation
    EOD,
        "choice_2" => <<<EOD
    To separate two independent clauses
    EOD,
        "choice_3" => <<<EOD
    To end a sentence
    EOD,
        "choice_4" => <<<EOD
    To indicate possession
    EOD,
        "correct_choice" => <<<EOD
    To introduce a list or explanation
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    Which sentence correctly uses an apostrophe for possession?
    EOD,
        "choice_1" => <<<EOD
    The dogs bone is on the floor.
    EOD,
        "choice_2" => <<<EOD
    The dogs' bone is on the floor.
    EOD,
        "choice_3" => <<<EOD
    The dog's bone is on the floor.
    EOD,
        "choice_4" => <<<EOD
    The dogs' bones are on the floor.
    EOD,
        "correct_choice" => <<<EOD
    The dog's bone is on the floor.
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    What does an apostrophe in "It's raining" represent?
    EOD,
        "choice_1" => <<<EOD
    Possession
    EOD,
        "choice_2" => <<<EOD
    Plural form
    EOD,
        "choice_3" => <<<EOD
    A contraction for "It is"
    EOD,
        "choice_4" => <<<EOD
    A contraction for "It has"
    EOD,
        "correct_choice" => <<<EOD
    A contraction for "It is"
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    Which of the following is a correct use of quotation marks?
    EOD,
        "choice_1" => <<<EOD
    He said, I will meet you there.
    EOD,
        "choice_2" => <<<EOD
    She asked, Do you want to join us?
    EOD,
        "choice_3" => <<<EOD
    He said, "I will meet you there."
    EOD,
        "choice_4" => <<<EOD
    "She said she would join us."
    EOD,
        "correct_choice" => <<<EOD
    He said, "I will meet you there."
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    Which punctuation mark is used to separate related independent clauses?
    EOD,
        "choice_1" => <<<EOD
    Semicolon
    EOD,
        "choice_2" => <<<EOD
    Colon
    EOD,
        "choice_3" => <<<EOD
    Period
    EOD,
        "choice_4" => <<<EOD
    Comma
    EOD,
        "correct_choice" => <<<EOD
    Semicolon
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    How is a hyphen used in the sentence: "She is a well known artist"?
    EOD,
        "choice_1" => <<<EOD
    To join two related adjectives before a noun
    EOD,
        "choice_2" => <<<EOD
    To separate two independent clauses
    EOD,
        "choice_3" => <<<EOD
    To indicate possession
    EOD,
        "choice_4" => <<<EOD
    To end the sentence
    EOD,
        "correct_choice" => <<<EOD
    To join two related adjectives before a noun
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    Which of these uses an en dash correctly?
    EOD,
        "choice_1" => <<<EOD
    The meeting is from 2:00–3:30 p.m.
    EOD,
        "choice_2" => <<<EOD
    The meeting is from 2:00-3:30 p.m.
    EOD,
        "choice_3" => <<<EOD
    The meeting is from 2:00—3:30 p.m.
    EOD,
        "choice_4" => <<<EOD
    The meeting is from 2:00– 3:30 p.m.
    EOD,
        "correct_choice" => <<<EOD
    The meeting is from 2:00–3:30 p.m.
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    What is the function of an em dash?
    EOD,
        "choice_1" => <<<EOD
    To show a sudden break in thought
    EOD,
        "choice_2" => <<<EOD
    To join related clauses
    EOD,
        "choice_3" => <<<EOD
    To separate list items
    EOD,
        "choice_4" => <<<EOD
    To introduce a quote
    EOD,
        "correct_choice" => <<<EOD
    To show a sudden break in thought
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    How should the following sentence be punctuated? "He went to the store he bought some apples."
    EOD,
        "choice_1" => <<<EOD
    He went to the store, he bought some apples.
    EOD,
        "choice_2" => <<<EOD
    He went to the store; he bought some apples.
    EOD,
        "choice_3" => <<<EOD
    He went to the store. He bought some apples.
    EOD,
        "choice_4" => <<<EOD
    He went to the store and bought some apples.
    EOD,
        "correct_choice" => <<<EOD
    He went to the store; he bought some apples.
    EOD,
      ],
      [
        "topic_id" => 11,
        "question" => <<<EOD
    Which sentence correctly uses a comma before a conjunction?
    EOD,
        "choice_1" => <<<EOD
    I went to the store and bought some milk.
    EOD,
        "choice_2" => <<<EOD
    I went to the store, and bought some milk.
    EOD,
        "choice_3" => <<<EOD
    I went to the store, and I bought some milk.
    EOD,
        "choice_4" => <<<EOD
    I went to the store and I bought some milk.
    EOD,
        "correct_choice" => <<<EOD
    I went to the store, and I bought some milk.
    EOD,
      ],



      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of the following sentences correctly uses capitalization?
  EOD,
        "choice_1" => <<<EOD
  "she went to the store."
  EOD,
        "choice_2" => <<<EOD
  "She went to the store."
  EOD,
        "choice_3" => <<<EOD
  "she Went to the Store."
  EOD,
        "choice_4" => <<<EOD
  "she Went to The Store."
  EOD,
        "correct_choice" => <<<EOD
  She went to the store.
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of the following is a proper noun?
  EOD,
        "choice_1" => <<<EOD
  dog
  EOD,
        "choice_2" => <<<EOD
  city
  EOD,
        "choice_3" => <<<EOD
  America
  EOD,
        "choice_4" => <<<EOD
  happy
  EOD,
        "correct_choice" => <<<EOD
  America
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of the following words should be capitalized?
  EOD,
        "choice_1" => <<<EOD
  monday
  EOD,
        "choice_2" => <<<EOD
  january
  EOD,
        "choice_3" => <<<EOD
  holiday
  EOD,
        "choice_4" => <<<EOD
  spring
  EOD,
        "correct_choice" => <<<EOD
  January
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of these sentences correctly uses capitalization for a holiday?
  EOD,
        "choice_1" => <<<EOD
  "We celebrate christmas every year."
  EOD,
        "choice_2" => <<<EOD
  "We celebrate Christmas every year."
  EOD,
        "choice_3" => <<<EOD
  "We Celebrate Christmas every Year."
  EOD,
        "choice_4" => <<<EOD
  "We Celebrate christmas every year."
  EOD,
        "correct_choice" => <<<EOD
  We celebrate Christmas every year.
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  In the sentence, "I went to paris last summer," which word should be capitalized?
  EOD,
        "choice_1" => <<<EOD
  Paris
  EOD,
        "choice_2" => <<<EOD
  went
  EOD,
        "choice_3" => <<<EOD
  last
  EOD,
        "choice_4" => <<<EOD
  summer
  EOD,
        "correct_choice" => <<<EOD
  Paris
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of the following titles is capitalized correctly?
  EOD,
        "choice_1" => <<<EOD
  "the great gatsby"
  EOD,
        "choice_2" => <<<EOD
  "The Great Gatsby"
  EOD,
        "choice_3" => <<<EOD
  "The great Gatsby"
  EOD,
        "choice_4" => <<<EOD
  "the Great Gatsby"
  EOD,
        "correct_choice" => <<<EOD
  The Great Gatsby
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  The first word in a direct quote should be:
  EOD,
        "choice_1" => <<<EOD
  Always in lowercase
  EOD,
        "choice_2" => <<<EOD
  Always in uppercase
  EOD,
        "choice_3" => <<<EOD
  Capitalized if it begins the sentence
  EOD,
        "choice_4" => <<<EOD
  Capitalized if it's a proper noun
  EOD,
        "correct_choice" => <<<EOD
  Capitalized if it begins the sentence
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of the following should be capitalized?
  EOD,
        "choice_1" => <<<EOD
  the united states of america
  EOD,
        "choice_2" => <<<EOD
  the United States of America
  EOD,
        "choice_3" => <<<EOD
  The United states of america
  EOD,
        "choice_4" => <<<EOD
  the united States of America
  EOD,
        "correct_choice" => <<<EOD
  the United States of America
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of these is a proper noun?
  EOD,
        "choice_1" => <<<EOD
  lake
  EOD,
        "choice_2" => <<<EOD
  mountain
  EOD,
        "choice_3" => <<<EOD
  Eiffel Tower
  EOD,
        "choice_4" => <<<EOD
  tree
  EOD,
        "correct_choice" => <<<EOD
  Eiffel Tower
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which sentence is capitalized correctly?
  EOD,
        "choice_1" => <<<EOD
  "we will go to the park tomorrow."
  EOD,
        "choice_2" => <<<EOD
  "We will go to the park tomorrow."
  EOD,
        "choice_3" => <<<EOD
  "We will go to the park Tomorrow."
  EOD,
        "choice_4" => <<<EOD
  "We will Go to the park tomorrow."
  EOD,
        "correct_choice" => <<<EOD
  We will go to the park tomorrow.
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  What is the rule for capitalizing the pronoun "I"?
  EOD,
        "choice_1" => <<<EOD
  It should always be capitalized.
  EOD,
        "choice_2" => <<<EOD
  It is capitalized when it starts a sentence.
  EOD,
        "choice_3" => <<<EOD
  It is capitalized when it refers to a specific person.
  EOD,
        "choice_4" => <<<EOD
  It is never capitalized.
  EOD,
        "correct_choice" => <<<EOD
  It should always be capitalized.
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of the following should be capitalized?
  EOD,
        "choice_1" => <<<EOD
  professor smith
  EOD,
        "choice_2" => <<<EOD
  Professor Smith
  EOD,
        "choice_3" => <<<EOD
  professor Smith
  EOD,
        "choice_4" => <<<EOD
  professor smith
  EOD,
        "correct_choice" => <<<EOD
  Professor Smith
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of these sentences has the first word of a direct quote capitalized correctly?
  EOD,
        "choice_1" => <<<EOD
  She said, "we need to leave soon."
  EOD,
        "choice_2" => <<<EOD
  She said, "We need to leave soon."
  EOD,
        "choice_3" => <<<EOD
  She said, "we Need to leave soon."
  EOD,
        "choice_4" => <<<EOD
  She said, "we need To leave soon."
  EOD,
        "correct_choice" => <<<EOD
  She said, "We need to leave soon."
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  Which of these names should be capitalized?
  EOD,
        "choice_1" => <<<EOD
  my friend sarah
  EOD,
        "choice_2" => <<<EOD
  my friend Sarah
  EOD,
        "choice_3" => <<<EOD
  my Friend sarah
  EOD,
        "choice_4" => <<<EOD
  my friend SARAH
  EOD,
        "correct_choice" => <<<EOD
  my friend Sarah
  EOD,
      ],
      [
        "topic_id" => 12,
        "question" => <<<EOD
  What is the correct way to capitalize the first word in the salutation of a letter?
  EOD,
        "choice_1" => <<<EOD
  "dear Sir,"
  EOD,
        "choice_2" => <<<EOD
  "Dear sir,"
  EOD,
        "choice_3" => <<<EOD
  "Dear Sir,"
  EOD,
        "choice_4" => <<<EOD
  "dear Sir,"
  EOD,
        "correct_choice" => <<<EOD
  Dear Sir
  EOD,
      ],



      [
        "topic_id" => 13,
        "question" => <<<EOD
Which sentence uses correct subject-verb agreement?
EOD,
        "choice_1" => <<<EOD
The dogs barks loudly.
EOD,
        "choice_2" => <<<EOD
The dog bark loudly.
EOD,
        "choice_3" => <<<EOD
The dog barks loudly.
EOD,
        "choice_4" => <<<EOD
The dogs barking loudly.
EOD,
        "correct_choice" => <<<EOD
The dog barks loudly.
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
The committee (approve/approves) the new policies every month.
EOD,
        "choice_1" => <<<EOD
approve
EOD,
        "choice_2" => <<<EOD
approves
EOD,
        "choice_3" => <<<EOD
are approving
EOD,
        "choice_4" => <<<EOD
have approved
EOD,
        "correct_choice" => <<<EOD
approves
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
Each of the students (has/have) completed the assignment.
EOD,
        "choice_1" => <<<EOD
has
EOD,
        "choice_2" => <<<EOD
have
EOD,
        "choice_3" => <<<EOD
are having
EOD,
        "choice_4" => <<<EOD
was
EOD,
        "correct_choice" => <<<EOD
has
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
Either John or his friends (is/are) going to the game.
EOD,
        "choice_1" => <<<EOD
is
EOD,
        "choice_2" => <<<EOD
are
EOD,
        "choice_3" => <<<EOD
has
EOD,
        "choice_4" => <<<EOD
have
EOD,
        "correct_choice" => <<<EOD
are
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
The team (run/runs) out onto the field together.
EOD,
        "choice_1" => <<<EOD
run
EOD,
        "choice_2" => <<<EOD
runs
EOD,
        "choice_3" => <<<EOD
is running
EOD,
        "choice_4" => <<<EOD
has run
EOD,
        "correct_choice" => <<<EOD
runs
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
Neither the manager nor the employees (wants/want) to work overtime.
EOD,
        "choice_1" => <<<EOD
wants
EOD,
        "choice_2" => <<<EOD
want
EOD,
        "choice_3" => <<<EOD
has wanted
EOD,
        "choice_4" => <<<EOD
wanting
EOD,
        "correct_choice" => <<<EOD
want
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
My friends and I (was/were) going to the movie last night.
EOD,
        "choice_1" => <<<EOD
was
EOD,
        "choice_2" => <<<EOD
were
EOD,
        "choice_3" => <<<EOD
have
EOD,
        "choice_4" => <<<EOD
has
EOD,
        "correct_choice" => <<<EOD
were
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
Everyone (needs/need) to bring their own supplies.
EOD,
        "choice_1" => <<<EOD
needs
EOD,
        "choice_2" => <<<EOD
need
EOD,
        "choice_3" => <<<EOD
has needed
EOD,
        "choice_4" => <<<EOD
have needed
EOD,
        "correct_choice" => <<<EOD
needs
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
Either the book or the magazine (is/are) on the table.
EOD,
        "choice_1" => <<<EOD
is
EOD,
        "choice_2" => <<<EOD
are
EOD,
        "choice_3" => <<<EOD
have
EOD,
        "choice_4" => <<<EOD
has
EOD,
        "correct_choice" => <<<EOD
is
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
The boxes (is/are) on the shelf in the garage.
EOD,
        "choice_1" => <<<EOD
is
EOD,
        "choice_2" => <<<EOD
are
EOD,
        "choice_3" => <<<EOD
has
EOD,
        "choice_4" => <<<EOD
was
EOD,
        "correct_choice" => <<<EOD
are
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
One of the cars (belong/belongs) to my neighbor.
EOD,
        "choice_1" => <<<EOD
belong
EOD,
        "choice_2" => <<<EOD
belongs
EOD,
        "choice_3" => <<<EOD
are belonging
EOD,
        "choice_4" => <<<EOD
was belonging
EOD,
        "correct_choice" => <<<EOD
belongs
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
The family (go/goes) to the beach every summer.
EOD,
        "choice_1" => <<<EOD
go
EOD,
        "choice_2" => <<<EOD
goes
EOD,
        "choice_3" => <<<EOD
has gone
EOD,
        "choice_4" => <<<EOD
going
EOD,
        "correct_choice" => <<<EOD
goes
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
There (is/are) three apples on the counter.
EOD,
        "choice_1" => <<<EOD
is
EOD,
        "choice_2" => <<<EOD
are
EOD,
        "choice_3" => <<<EOD
was
EOD,
        "choice_4" => <<<EOD
has
EOD,
        "correct_choice" => <<<EOD
are
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
Neither of the answers (seems/seem) correct to me.
EOD,
        "choice_1" => <<<EOD
seems
EOD,
        "choice_2" => <<<EOD
seem
EOD,
        "choice_3" => <<<EOD
has seemed
EOD,
        "choice_4" => <<<EOD
seeming
EOD,
        "correct_choice" => <<<EOD
seems
EOD,
      ],
      [
        "topic_id" => 13,
        "question" => <<<EOD
The teacher, along with her students, (was/were) excited for the trip.
EOD,
        "choice_1" => <<<EOD
was
EOD,
        "choice_2" => <<<EOD
were
EOD,
        "choice_3" => <<<EOD
has
EOD,
        "choice_4" => <<<EOD
are
EOD,
        "correct_choice" => <<<EOD
was
EOD,
      ],



      [
        "topic_id" => 14,
        "question" => <<<EOD
Identify the subject in the sentence: "The bouquet of flowers is on the table."
EOD,
        "choice_1" => <<<EOD
bouquet
EOD,
        "choice_2" => <<<EOD
flowers
EOD,
        "choice_3" => <<<EOD
table
EOD,
        "choice_4" => <<<EOD
is
EOD,
        "correct_choice" => <<<EOD
bouquet
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
In "The teacher, along with her students, is preparing for the test," what is the subject?
EOD,
        "choice_1" => <<<EOD
teacher
EOD,
        "choice_2" => <<<EOD
students
EOD,
        "choice_3" => <<<EOD
teacher and students
EOD,
        "choice_4" => <<<EOD
preparing
EOD,
        "correct_choice" => <<<EOD
teacher
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
What is the subject in the sentence: "The results of the survey were surprising."
EOD,
        "choice_1" => <<<EOD
results
EOD,
        "choice_2" => <<<EOD
survey
EOD,
        "choice_3" => <<<EOD
were
EOD,
        "choice_4" => <<<EOD
surprising
EOD,
        "correct_choice" => <<<EOD
results
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
In "Neither the manager nor the employees are responsible," which word is the subject?
EOD,
        "choice_1" => <<<EOD
manager
EOD,
        "choice_2" => <<<EOD
employees
EOD,
        "choice_3" => <<<EOD
responsible
EOD,
        "choice_4" => <<<EOD
neither
EOD,
        "correct_choice" => <<<EOD
employees
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
Identify the subject in the sentence: "Here are the keys you requested."
EOD,
        "choice_1" => <<<EOD
Here
EOD,
        "choice_2" => <<<EOD
are
EOD,
        "choice_3" => <<<EOD
keys
EOD,
        "choice_4" => <<<EOD
requested
EOD,
        "correct_choice" => <<<EOD
keys
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
In the sentence, "The dog, along with the cats, was in the yard," what is the subject?
EOD,
        "choice_1" => <<<EOD
dog
EOD,
        "choice_2" => <<<EOD
cats
EOD,
        "choice_3" => <<<EOD
dog and cats
EOD,
        "choice_4" => <<<EOD
yard
EOD,
        "correct_choice" => <<<EOD
dog
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
What is the subject in "The box of old photos is in the attic"?
EOD,
        "choice_1" => <<<EOD
box
EOD,
        "choice_2" => <<<EOD
photos
EOD,
        "choice_3" => <<<EOD
attic
EOD,
        "choice_4" => <<<EOD
old
EOD,
        "correct_choice" => <<<EOD
box
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
Identify the subject in the sentence: "Each of the players has a unique skill."
EOD,
        "choice_1" => <<<EOD
Each
EOD,
        "choice_2" => <<<EOD
players
EOD,
        "choice_3" => <<<EOD
skill
EOD,
        "choice_4" => <<<EOD
has
EOD,
        "correct_choice" => <<<EOD
Each
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
In "There are several items on the list," what is the subject?
EOD,
        "choice_1" => <<<EOD
There
EOD,
        "choice_2" => <<<EOD
items
EOD,
        "choice_3" => <<<EOD
list
EOD,
        "choice_4" => <<<EOD
several
EOD,
        "correct_choice" => <<<EOD
items
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
What is the subject in "One of the books is missing from the shelf"?
EOD,
        "choice_1" => <<<EOD
One
EOD,
        "choice_2" => <<<EOD
books
EOD,
        "choice_3" => <<<EOD
shelf
EOD,
        "choice_4" => <<<EOD
missing
EOD,
        "correct_choice" => <<<EOD
One
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
Identify the subject in "The collection of stamps was sold at an auction."
EOD,
        "choice_1" => <<<EOD
collection
EOD,
        "choice_2" => <<<EOD
stamps
EOD,
        "choice_3" => <<<EOD
auction
EOD,
        "choice_4" => <<<EOD
sold
EOD,
        "correct_choice" => <<<EOD
collection
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
What is the subject in "The manager, along with the staff, plans to stay late"?
EOD,
        "choice_1" => <<<EOD
manager
EOD,
        "choice_2" => <<<EOD
staff
EOD,
        "choice_3" => <<<EOD
manager and staff
EOD,
        "choice_4" => <<<EOD
plans
EOD,
        "correct_choice" => <<<EOD
manager
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
What is the subject in "The family is going on a vacation"?
EOD,
        "choice_1" => <<<EOD
family
EOD,
        "choice_2" => <<<EOD
going
EOD,
        "choice_3" => <<<EOD
vacation
EOD,
        "choice_4" => <<<EOD
on
EOD,
        "correct_choice" => <<<EOD
family
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
Identify the subject in the sentence: "A group of scientists has made a breakthrough."
EOD,
        "choice_1" => <<<EOD
group
EOD,
        "choice_2" => <<<EOD
scientists
EOD,
        "choice_3" => <<<EOD
breakthrough
EOD,
        "choice_4" => <<<EOD
made
EOD,
        "correct_choice" => <<<EOD
group
EOD,
      ],
      [
        "topic_id" => 14,
        "question" => <<<EOD
In "The series of lectures is starting next week," what is the subject?
EOD,
        "choice_1" => <<<EOD
series
EOD,
        "choice_2" => <<<EOD
lectures
EOD,
        "choice_3" => <<<EOD
starting
EOD,
        "choice_4" => <<<EOD
next week
EOD,
        "correct_choice" => <<<EOD
series
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
Identify the subject in the sentence: "The cat sleeps on the mat."
EOD,
        "choice_1" => <<<EOD
sleeps
EOD,
        "choice_2" => <<<EOD
mat
EOD,
        "choice_3" => <<<EOD
The cat
EOD,
        "choice_4" => <<<EOD
on
EOD,
        "correct_choice" => <<<EOD
The cat
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
What is the predicate in the sentence: "Birds chirp loudly in the morning"?
EOD,
        "choice_1" => <<<EOD
Birds
EOD,
        "choice_2" => <<<EOD
chirp loudly in the morning
EOD,
        "choice_3" => <<<EOD
loudly
EOD,
        "choice_4" => <<<EOD
in the morning
EOD,
        "correct_choice" => <<<EOD
chirp loudly in the morning
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
In "The sun is shining brightly," which word is the subject?
EOD,
        "choice_1" => <<<EOD
is
EOD,
        "choice_2" => <<<EOD
shining
EOD,
        "choice_3" => <<<EOD
brightly
EOD,
        "choice_4" => <<<EOD
sun
EOD,
        "correct_choice" => <<<EOD
sun
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
Identify the complete predicate in the sentence: "The students finished their project early."
EOD,
        "choice_1" => <<<EOD
The students
EOD,
        "choice_2" => <<<EOD
finished
EOD,
        "choice_3" => <<<EOD
finished their project early
EOD,
        "choice_4" => <<<EOD
their project early
EOD,
        "correct_choice" => <<<EOD
finished their project early
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
What is the simple subject in the sentence: "A group of friends went to the beach"?
EOD,
        "choice_1" => <<<EOD
A group
EOD,
        "choice_2" => <<<EOD
friends
EOD,
        "choice_3" => <<<EOD
went
EOD,
        "choice_4" => <<<EOD
the beach
EOD,
        "correct_choice" => <<<EOD
A group
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
Which part of this sentence is the compound subject? "The teacher and her students are planning a field trip."
EOD,
        "choice_1" => <<<EOD
teacher
EOD,
        "choice_2" => <<<EOD
her students
EOD,
        "choice_3" => <<<EOD
teacher and students
EOD,
        "choice_4" => <<<EOD
planning
EOD,
        "correct_choice" => <<<EOD
teacher and students
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
Identify the simple predicate in the sentence: "The dog barked loudly at the mailman."
EOD,
        "choice_1" => <<<EOD
The dog
EOD,
        "choice_2" => <<<EOD
barked
EOD,
        "choice_3" => <<<EOD
loudly
EOD,
        "choice_4" => <<<EOD
at the mailman
EOD,
        "correct_choice" => <<<EOD
barked
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
In "The bright moon lit up the sky," what is the complete subject?
EOD,
        "choice_1" => <<<EOD
The moon
EOD,
        "choice_2" => <<<EOD
bright moon
EOD,
        "choice_3" => <<<EOD
The bright moon
EOD,
        "choice_4" => <<<EOD
lit up
EOD,
        "correct_choice" => <<<EOD
The bright moon
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
Which of the following is the compound predicate in the sentence: "She cooked dinner and cleaned the kitchen"?
EOD,
        "choice_1" => <<<EOD
She
EOD,
        "choice_2" => <<<EOD
cooked dinner and cleaned
EOD,
        "choice_3" => <<<EOD
dinner
EOD,
        "choice_4" => <<<EOD
cleaned the kitchen
EOD,
        "correct_choice" => <<<EOD
cooked dinner and cleaned
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
In "The child ran quickly across the playground," which word is the simple predicate?
EOD,
        "choice_1" => <<<EOD
ran
EOD,
        "choice_2" => <<<EOD
child
EOD,
        "choice_3" => <<<EOD
quickly
EOD,
        "choice_4" => <<<EOD
playground
EOD,
        "correct_choice" => <<<EOD
ran
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
What is the subject in the sentence: "Everyone in the class enjoyed the movie"?
EOD,
        "choice_1" => <<<EOD
class
EOD,
        "choice_2" => <<<EOD
Everyone
EOD,
        "choice_3" => <<<EOD
enjoyed
EOD,
        "choice_4" => <<<EOD
movie
EOD,
        "correct_choice" => <<<EOD
Everyone
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
Identify the predicate in "My mother baked cookies yesterday."
EOD,
        "choice_1" => <<<EOD
My mother
EOD,
        "choice_2" => <<<EOD
baked cookies yesterday
EOD,
        "choice_3" => <<<EOD
cookies
EOD,
        "choice_4" => <<<EOD
baked
EOD,
        "correct_choice" => <<<EOD
baked cookies yesterday
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
In "The flowers smell fresh," which word is the predicate adjective?
EOD,
        "choice_1" => <<<EOD
flowers
EOD,
        "choice_2" => <<<EOD
smell
EOD,
        "choice_3" => <<<EOD
fresh
EOD,
        "choice_4" => <<<EOD
The
EOD,
        "correct_choice" => <<<EOD
fresh
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
Which of the following is the simple subject in "The book on the table belongs to me"?
EOD,
        "choice_1" => <<<EOD
book
EOD,
        "choice_2" => <<<EOD
table
EOD,
        "choice_3" => <<<EOD
belongs
EOD,
        "choice_4" => <<<EOD
me
EOD,
        "correct_choice" => <<<EOD
book
EOD,
      ],
      [
        "topic_id" => 15,
        "question" => <<<EOD
Identify the complete predicate in the sentence: "The kids are playing in the park."
EOD,
        "choice_1" => <<<EOD
The kids
EOD,
        "choice_2" => <<<EOD
are
EOD,
        "choice_3" => <<<EOD
playing in the park
EOD,
        "choice_4" => <<<EOD
The kids are
EOD,
        "correct_choice" => <<<EOD
playing in the park
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which of the following is an example of an independent clause?
EOD,
        "choice_1" => <<<EOD
If you study hard
EOD,
        "choice_2" => <<<EOD
Although it rained
EOD,
        "choice_3" => <<<EOD
She smiled
EOD,
        "choice_4" => <<<EOD
When I was young
EOD,
        "correct_choice" => <<<EOD
She smiled
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
What is the main function of a dependent clause?
EOD,
        "choice_1" => <<<EOD
To express a complete thought
EOD,
        "choice_2" => <<<EOD
To modify a noun or pronoun
EOD,
        "choice_3" => <<<EOD
To provide additional information or context to an independent clause
EOD,
        "choice_4" => <<<EOD
To act as the subject of a sentence
EOD,
        "correct_choice" => <<<EOD
To provide additional information or context to an independent clause
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which of the following is an adjective clause?
EOD,
        "choice_1" => <<<EOD
She bought the dress that she liked.
EOD,
        "choice_2" => <<<EOD
He will arrive when the meeting starts.
EOD,
        "choice_3" => <<<EOD
I don't know who called me.
EOD,
        "choice_4" => <<<EOD
I can't decide whether to go or not.
EOD,
        "correct_choice" => <<<EOD
She bought the dress that she liked.
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which of the following is a noun clause?
EOD,
        "choice_1" => <<<EOD
Whoever arrives first will get the prize.
EOD,
        "choice_2" => <<<EOD
The cat that I adopted is playful.
EOD,
        "choice_3" => <<<EOD
We went to the store after we finished school.
EOD,
        "choice_4" => <<<EOD
She explained why she was late.
EOD,
        "correct_choice" => <<<EOD
Whoever arrives first will get the prize.
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
What is the role of a noun clause in a sentence?
EOD,
        "choice_1" => <<<EOD
It modifies a noun or pronoun
EOD,
        "choice_2" => <<<EOD
It provides extra information about a verb
EOD,
        "choice_3" => <<<EOD
It acts as a noun in the sentence
EOD,
        "choice_4" => <<<EOD
It connects two independent clauses
EOD,
        "correct_choice" => <<<EOD
It acts as a noun in the sentence
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which of the following sentences contains an adverbial clause?
EOD,
        "choice_1" => <<<EOD
She was reading a book while waiting for the bus.
EOD,
        "choice_2" => <<<EOD
The car that he bought is red.
EOD,
        "choice_3" => <<<EOD
I remember when we first met.
EOD,
        "choice_4" => <<<EOD
I know what you did yesterday.
EOD,
        "correct_choice" => <<<EOD
She was reading a book while waiting for the bus.
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which of these is a dependent clause?
EOD,
        "choice_1" => <<<EOD
She went to the store
EOD,
        "choice_2" => <<<EOD
Although I was tired
EOD,
        "choice_3" => <<<EOD
The dog barked
EOD,
        "choice_4" => <<<EOD
We went out for dinner
EOD,
        "correct_choice" => <<<EOD
Although I was tired
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Choose the correct adjective clause:
EOD,
        "choice_1" => <<<EOD
She saw a movie that she liked.
EOD,
        "choice_2" => <<<EOD
I know that you are coming.
EOD,
        "choice_3" => <<<EOD
We don't know where she went.
EOD,
        "choice_4" => <<<EOD
He asked whether it was true.
EOD,
        "correct_choice" => <<<EOD
She saw a movie that she liked.
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which sentence contains a noun clause?
EOD,
        "choice_1" => <<<EOD
I wonder what happened.
EOD,
        "choice_2" => <<<EOD
They are going to the party.
EOD,
        "choice_3" => <<<EOD
She laughed at the joke.
EOD,
        "choice_4" => <<<EOD
I like the book.
EOD,
        "correct_choice" => <<<EOD
I wonder what happened.
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
What type of clause is this: "When we finished the project"?
EOD,
        "choice_1" => <<<EOD
Independent clause
EOD,
        "choice_2" => <<<EOD
Dependent clause
EOD,
        "choice_3" => <<<EOD
Adjective clause
EOD,
        "choice_4" => <<<EOD
Noun clause
EOD,
        "correct_choice" => <<<EOD
Dependent clause
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which of these sentences contains a relative pronoun introducing an adjective clause?
EOD,
        "choice_1" => <<<EOD
The book that you gave me is interesting.
EOD,
        "choice_2" => <<<EOD
He walked to the store.
EOD,
        "choice_3" => <<<EOD
I met her because of her kindness.
EOD,
        "choice_4" => <<<EOD
I believe you are right.
EOD,
        "correct_choice" => <<<EOD
The book that you gave me is interesting.
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which sentence contains a subordinate clause?
EOD,
        "choice_1" => <<<EOD
I enjoy reading books
EOD,
        "choice_2" => <<<EOD
Because I was late, I missed the bus
EOD,
        "choice_3" => <<<EOD
He went home
EOD,
        "choice_4" => <<<EOD
I will call you
EOD,
        "correct_choice" => <<<EOD
Because I was late, I missed the bus
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Choose the correct sentence with an adverbial clause:
EOD,
        "choice_1" => <<<EOD
She smiled because she was happy.
EOD,
        "choice_2" => <<<EOD
The movie was good that we watched last night.
EOD,
        "choice_3" => <<<EOD
He enjoys traveling that is his hobby.
EOD,
        "choice_4" => <<<EOD
I didn’t know who called me.
EOD,
        "correct_choice" => <<<EOD
She smiled because she was happy.
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which of these is an example of a compound sentence with a noun clause?
EOD,
        "choice_1" => <<<EOD
She knows what you did yesterday, and she is upset.
EOD,
        "choice_2" => <<<EOD
We went out for dinner, and we enjoyed the food.
EOD,
        "choice_3" => <<<EOD
The teacher taught the lesson.
EOD,
        "choice_4" => <<<EOD
He went to the store.
EOD,
        "correct_choice" => <<<EOD
She knows what you did yesterday, and she is upset.
EOD,
      ],
      [
        "topic_id" => 16,
        "question" => <<<EOD
Which of these is an example of an adjective clause modifying a noun?
EOD,
        "choice_1" => <<<EOD
I met the person who helped me.
EOD,
        "choice_2" => <<<EOD
He didn’t go to the party because he was sick.
EOD,
        "choice_3" => <<<EOD
We arrived when the movie started.
EOD,
        "choice_4" => <<<EOD
She doesn’t know why they left.
EOD,
        "correct_choice" => <<<EOD
I met the person who helped me.
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
Which of the following is a prepositional phrase?
EOD,
        "choice_1" => <<<EOD
In the morning
EOD,
        "choice_2" => <<<EOD
Running fast
EOD,
        "choice_3" => <<<EOD
To go home
EOD,
        "choice_4" => <<<EOD
Playing the piano
EOD,
        "correct_choice" => <<<EOD
In the morning
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
What is the function of a prepositional phrase in the sentence: "The keys on the table are mine"?
EOD,
        "choice_1" => <<<EOD
To modify the subject "keys"
EOD,
        "choice_2" => <<<EOD
To modify the verb "are"
EOD,
        "choice_3" => <<<EOD
To show the relationship between the keys and the table
EOD,
        "choice_4" => <<<EOD
To explain where the keys are
EOD,
        "correct_choice" => <<<EOD
To show the relationship between the keys and the table
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
Which of the following is a gerund phrase?
EOD,
        "choice_1" => <<<EOD
Walking to the store
EOD,
        "choice_2" => <<<EOD
To walk to the store
EOD,
        "choice_3" => <<<EOD
Walked to the store
EOD,
        "choice_4" => <<<EOD
Walking very fast
EOD,
        "correct_choice" => <<<EOD
Walking to the store
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
In the sentence "He enjoys reading books," what is the gerund phrase?
EOD,
        "choice_1" => <<<EOD
He
EOD,
        "choice_2" => <<<EOD
Enjoys
EOD,
        "choice_3" => <<<EOD
Reading books
EOD,
        "choice_4" => <<<EOD
Books
EOD,
        "correct_choice" => <<<EOD
Reading books
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
What is the function of the participial phrase in the sentence: "The girl running to catch the bus is my friend"?
EOD,
        "choice_1" => <<<EOD
To describe the girl
EOD,
        "choice_2" => <<<EOD
To describe the bus
EOD,
        "choice_3" => <<<EOD
To describe the action of catching the bus
EOD,
        "choice_4" => <<<EOD
To describe the subject "girl"
EOD,
        "correct_choice" => <<<EOD
To describe the girl
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
Which of the following is an example of a participial phrase?
EOD,
        "choice_1" => <<<EOD
To run quickly
EOD,
        "choice_2" => <<<EOD
Running down the street
EOD,
        "choice_3" => <<<EOD
On the roof
EOD,
        "choice_4" => <<<EOD
To go home
EOD,
        "correct_choice" => <<<EOD
Running down the street
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
What is the function of the infinitive phrase in the sentence: "He wants to learn how to play the guitar"?
EOD,
        "choice_1" => <<<EOD
To act as the subject of the sentence
EOD,
        "choice_2" => <<<EOD
To describe the verb "wants"
EOD,
        "choice_3" => <<<EOD
To modify the noun "guitar"
EOD,
        "choice_4" => <<<EOD
To explain what "he" wants to do
EOD,
        "correct_choice" => <<<EOD
To explain what "he" wants to do
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
Which of the following sentences contains an infinitive phrase?
EOD,
        "choice_1" => <<<EOD
She went to the park.
EOD,
        "choice_2" => <<<EOD
They like to play soccer.
EOD,
        "choice_3" => <<<EOD
I saw him yesterday.
EOD,
        "choice_4" => <<<EOD
We are waiting.
EOD,
        "correct_choice" => <<<EOD
They like to play soccer.
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
In the sentence "To finish this task, I need more time," what is the infinitive phrase?
EOD,
        "choice_1" => <<<EOD
To finish this task
EOD,
        "choice_2" => <<<EOD
I need more time
EOD,
        "choice_3" => <<<EOD
Finish
EOD,
        "choice_4" => <<<EOD
Task
EOD,
        "correct_choice" => <<<EOD
To finish this task
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
Which of the following is a gerund phrase functioning as the subject of the sentence?
EOD,
        "choice_1" => <<<EOD
Swimming in the pool
EOD,
        "choice_2" => <<<EOD
She enjoys swimming in the pool
EOD,
        "choice_3" => <<<EOD
The swimming pool
EOD,
        "choice_4" => <<<EOD
To swim is fun
EOD,
        "correct_choice" => <<<EOD
Swimming in the pool
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
What is the prepositional phrase in the sentence: "The children are playing in the yard"?
EOD,
        "choice_1" => <<<EOD
The children
EOD,
        "choice_2" => <<<EOD
Playing
EOD,
        "choice_3" => <<<EOD
In the yard
EOD,
        "choice_4" => <<<EOD
Yard
EOD,
        "correct_choice" => <<<EOD
In the yard
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
Which of the following is an example of an infinitive phrase used as an adjective?
EOD,
        "choice_1" => <<<EOD
To win the game
EOD,
        "choice_2" => <<<EOD
I want to visit the museum
EOD,
        "choice_3" => <<<EOD
The book to read
EOD,
        "choice_4" => <<<EOD
They are planning to travel
EOD,
        "correct_choice" => <<<EOD
The book to read
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
In the sentence "I saw him running down the street," what is the participial phrase?
EOD,
        "choice_1" => <<<EOD
Running down the street
EOD,
        "choice_2" => <<<EOD
Saw
EOD,
        "choice_3" => <<<EOD
Down the street
EOD,
        "choice_4" => <<<EOD
I saw him
EOD,
        "correct_choice" => <<<EOD
Running down the street
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
Which of the following is a gerund phrase used as the object of the sentence?
EOD,
        "choice_1" => <<<EOD
Running every morning is good for your health
EOD,
        "choice_2" => <<<EOD
I love running every morning
EOD,
        "choice_3" => <<<EOD
She enjoys to run
EOD,
        "choice_4" => <<<EOD
They are going running
EOD,
        "correct_choice" => <<<EOD
I love running every morning
EOD,
      ],
      [
        "topic_id" => 17,
        "question" => <<<EOD
What type of phrase is "on the table" in the sentence "The book is on the table"?
EOD,
        "choice_1" => <<<EOD
Prepositional phrase
EOD,
        "choice_2" => <<<EOD
Gerund phrase
EOD,
        "choice_3" => <<<EOD
Participial phrase
EOD,
        "choice_4" => <<<EOD
Infinitive phrase
EOD,
        "correct_choice" => <<<EOD
Prepositional phrase
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
What is a complex sentence?
EOD,
        "choice_1" => <<<EOD
A sentence with two or more independent clauses.
EOD,
        "choice_2" => <<<EOD
A sentence with one independent clause and one or more dependent clauses.
EOD,
        "choice_3" => <<<EOD
A sentence with only dependent clauses.
EOD,
        "choice_4" => <<<EOD
A sentence with no clauses.
EOD,
        "correct_choice" => <<<EOD
A sentence with one independent clause and one or more dependent clauses.
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
Which sentence is a complex sentence?
EOD,
        "choice_1" => <<<EOD
"I went home, and I went to bed."
EOD,
        "choice_2" => <<<EOD
"If it rains, we will cancel the picnic."
EOD,
        "choice_3" => <<<EOD
"The dog barks loudly."
EOD,
        "choice_4" => <<<EOD
"They are happy and content."
EOD,
        "correct_choice" => <<<EOD
"If it rains, we will cancel the picnic."
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
In a complex sentence, what role does a dependent clause play?
EOD,
        "choice_1" => <<<EOD
It expresses a complete thought and can stand alone.
EOD,
        "choice_2" => <<<EOD
It adds additional information but cannot stand alone.
EOD,
        "choice_3" => <<<EOD
It is a main clause in the sentence.
EOD,
        "choice_4" => <<<EOD
It contains only the subject.
EOD,
        "correct_choice" => <<<EOD
It adds additional information but cannot stand alone.
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
Which of these sentences contains a dependent clause?
EOD,
        "choice_1" => <<<EOD
"We went to the park."
EOD,
        "choice_2" => <<<EOD
"I like apples."
EOD,
        "choice_3" => <<<EOD
"Although it was late, he kept working."
EOD,
        "choice_4" => <<<EOD
"They slept."
EOD,
        "correct_choice" => <<<EOD
"Although it was late, he kept working."
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
What is the independent clause in the sentence: "Because she was tired, she went to bed early"?
EOD,
        "choice_1" => <<<EOD
"Because she was tired"
EOD,
        "choice_2" => <<<EOD
"She went to bed early"
EOD,
        "choice_3" => <<<EOD
"Because she went to bed"
EOD,
        "choice_4" => <<<EOD
"Tired, she went to bed early"
EOD,
        "correct_choice" => <<<EOD
"She went to bed early"
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
In the sentence "He missed the bus because he overslept," what is the dependent clause?
EOD,
        "choice_1" => <<<EOD
"He missed the bus"
EOD,
        "choice_2" => <<<EOD
"Because he overslept"
EOD,
        "choice_3" => <<<EOD
"He overslept"
EOD,
        "choice_4" => <<<EOD
"Missed the bus"
EOD,
        "correct_choice" => <<<EOD
"Because he overslept"
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
Which word is a subordinating conjunction?
EOD,
        "choice_1" => <<<EOD
and
EOD,
        "choice_2" => <<<EOD
but
EOD,
        "choice_3" => <<<EOD
because
EOD,
        "choice_4" => <<<EOD
for
EOD,
        "correct_choice" => <<<EOD
because
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
Identify the complex sentence.
EOD,
        "choice_1" => <<<EOD
"They are going to the store, and I am going to the park."
EOD,
        "choice_2" => <<<EOD
"He ran quickly."
EOD,
        "choice_3" => <<<EOD
"After she finished her homework, she watched a movie."
EOD,
        "choice_4" => <<<EOD
"The sun is bright."
EOD,
        "correct_choice" => <<<EOD
"After she finished her homework, she watched a movie."
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
Which sentence uses a relative pronoun to introduce a dependent clause?
EOD,
        "choice_1" => <<<EOD
"She ran because it was raining."
EOD,
        "choice_2" => <<<EOD
"The book that I read was amazing."
EOD,
        "choice_3" => <<<EOD
"He is happy, so he smiles."
EOD,
        "choice_4" => <<<EOD
"I went to the store, but it was closed."
EOD,
        "correct_choice" => <<<EOD
"The book that I read was amazing."
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
In the sentence "Unless he improves, he will not pass the course," what is the dependent clause?
EOD,
        "choice_1" => <<<EOD
"He will not pass the course"
EOD,
        "choice_2" => <<<EOD
"Unless he improves"
EOD,
        "choice_3" => <<<EOD
"He improves"
EOD,
        "choice_4" => <<<EOD
"Pass the course"
EOD,
        "correct_choice" => <<<EOD
"Unless he improves"
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
Which sentence is NOT a complex sentence?
EOD,
        "choice_1" => <<<EOD
"Since it was cold, she wore a coat."
EOD,
        "choice_2" => <<<EOD
"I went to the store, and I bought milk."
EOD,
        "choice_3" => <<<EOD
"Although he was late, he apologized."
EOD,
        "choice_4" => <<<EOD
"When the bell rings, we will go to lunch."
EOD,
        "correct_choice" => <<<EOD
"I went to the store, and I bought milk."
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
What is the purpose of a subordinating conjunction in a complex sentence?
EOD,
        "choice_1" => <<<EOD
To link two independent clauses.
EOD,
        "choice_2" => <<<EOD
To introduce a dependent clause.
EOD,
        "choice_3" => <<<EOD
To end a sentence.
EOD,
        "choice_4" => <<<EOD
To change verb tenses.
EOD,
        "correct_choice" => <<<EOD
To introduce a dependent clause.
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
Which of these sentences contains a subordinating conjunction?
EOD,
        "choice_1" => <<<EOD
"She is tired, and he is too."
EOD,
        "choice_2" => <<<EOD
"We will leave after the sun sets."
EOD,
        "choice_3" => <<<EOD
"I like ice cream."
EOD,
        "choice_4" => <<<EOD
"They are studying for the test."
EOD,
        "correct_choice" => <<<EOD
"We will leave after the sun sets."
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
In the sentence "I will call you when I arrive," the dependent clause is:
EOD,
        "choice_1" => <<<EOD
"I will call you"
EOD,
        "choice_2" => <<<EOD
"When I arrive"
EOD,
        "choice_3" => <<<EOD
"I arrive"
EOD,
        "choice_4" => <<<EOD
"Will call"
EOD,
        "correct_choice" => <<<EOD
"When I arrive"
EOD,
      ],
      [
        "topic_id" => 18,
        "question" => <<<EOD
Which of these is an independent clause?
EOD,
        "choice_1" => <<<EOD
"Although I like apples"
EOD,
        "choice_2" => <<<EOD
"Because he was late"
EOD,
        "choice_3" => <<<EOD
"He finished his homework"
EOD,
        "choice_4" => <<<EOD
"When the sun sets"
EOD,
        "correct_choice" => <<<EOD
"He finished his homework"
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
Which tense combination is used when both actions in a complex sentence happen at the same time?
EOD,
        "choice_1" => <<<EOD
Present Tense + Present Tense
EOD,
        "choice_2" => <<<EOD
Past Tense + Past Tense
EOD,
        "choice_3" => <<<EOD
Present Perfect Tense + Past Tense
EOD,
        "choice_4" => <<<EOD
Future Tense + Future Tense
EOD,
        "correct_choice" => <<<EOD
Present Tense + Present Tense
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
In the sentence "If he studies, he will pass the exam," which verb tense is used in the dependent clause?
EOD,
        "choice_1" => <<<EOD
Present Tense
EOD,
        "choice_2" => <<<EOD
Past Tense
EOD,
        "choice_3" => <<<EOD
Future Tense
EOD,
        "choice_4" => <<<EOD
Present Perfect Tense
EOD,
        "correct_choice" => <<<EOD
Present Tense
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
Which verb tense combination shows that one action happened before another in the past?
EOD,
        "choice_1" => <<<EOD
Past Tense + Present Tense
EOD,
        "choice_2" => <<<EOD
Past Tense + Past Perfect Tense
EOD,
        "choice_3" => <<<EOD
Present Perfect Tense + Future Tense
EOD,
        "choice_4" => <<<EOD
Present Tense + Future Tense
EOD,
        "correct_choice" => <<<EOD
Past Tense + Past Perfect Tense
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
In the sentence "When she finished her homework, she went to bed," which tense is used in the dependent clause?
EOD,
        "choice_1" => <<<EOD
Present Tense
EOD,
        "choice_2" => <<<EOD
Past Tense
EOD,
        "choice_3" => <<<EOD
Future Tense
EOD,
        "choice_4" => <<<EOD
Present Perfect Tense
EOD,
        "correct_choice" => <<<EOD
Past Tense
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
Which of these is the correct verb tense for the following complex sentence: "After he _______ (eat) his dinner, he went for a walk."
EOD,
        "choice_1" => <<<EOD
eats
EOD,
        "choice_2" => <<<EOD
ate
EOD,
        "choice_3" => <<<EOD
has eaten
EOD,
        "choice_4" => <<<EOD
had eaten
EOD,
        "correct_choice" => <<<EOD
had eaten
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
In the sentence "Since she has been working here, she has become more efficient," what is the tense of the verb in the dependent clause?
EOD,
        "choice_1" => <<<EOD
Present Tense
EOD,
        "choice_2" => <<<EOD
Past Tense
EOD,
        "choice_3" => <<<EOD
Present Perfect Tense
EOD,
        "choice_4" => <<<EOD
Future Tense
EOD,
        "correct_choice" => <<<EOD
Present Perfect Tense
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
Which tense is used in the dependent clause when describing a condition that is true in the present or future?
EOD,
        "choice_1" => <<<EOD
Present Tense
EOD,
        "choice_2" => <<<EOD
Past Tense
EOD,
        "choice_3" => <<<EOD
Future Tense
EOD,
        "choice_4" => <<<EOD
Present Perfect Tense
EOD,
        "correct_choice" => <<<EOD
Present Tense
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
What verb tense is used in the main clause of the sentence "If you study hard, you will pass the test"?
EOD,
        "choice_1" => <<<EOD
Present Tense
EOD,
        "choice_2" => <<<EOD
Past Tense
EOD,
        "choice_3" => <<<EOD
Future Tense
EOD,
        "choice_4" => <<<EOD
Present Perfect Tense
EOD,
        "correct_choice" => <<<EOD
Future Tense
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
In the sentence "I will help you if I _______ (have) time," which verb tense should be used in the dependent clause?
EOD,
        "choice_1" => <<<EOD
have
EOD,
        "choice_2" => <<<EOD
will have
EOD,
        "choice_3" => <<<EOD
had
EOD,
        "choice_4" => <<<EOD
having
EOD,
        "correct_choice" => <<<EOD
have
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
Which of the following sentences correctly shows the past perfect tense in a complex sentence?
EOD,
        "choice_1" => <<<EOD
"I had already left when you called."
EOD,
        "choice_2" => <<<EOD
"She will have finished the book by the time we meet."
EOD,
        "choice_3" => <<<EOD
"If they knew about the meeting, they would have come."
EOD,
        "choice_4" => <<<EOD
"We were talking when it started to rain."
EOD,
        "correct_choice" => <<<EOD
"I had already left when you called."
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
Which verb tense combination indicates an action that will be completed in the future before another future action?
EOD,
        "choice_1" => <<<EOD
Future Tense + Present Tense
EOD,
        "choice_2" => <<<EOD
Future Perfect Tense + Future Tense
EOD,
        "choice_3" => <<<EOD
Present Tense + Past Tense
EOD,
        "choice_4" => <<<EOD
Past Tense + Present Perfect Tense
EOD,
        "correct_choice" => <<<EOD
Future Perfect Tense + Future Tense
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
Which sentence uses the correct verb tense combination to show a past condition and its hypothetical result?
EOD,
        "choice_1" => <<<EOD
"If I knew about the meeting, I would have gone."
EOD,
        "choice_2" => <<<EOD
"If I know about the meeting, I will go."
EOD,
        "choice_3" => <<<EOD
"If I had known about the meeting, I would go."
EOD,
        "choice_4" => <<<EOD
"If I had known about the meeting, I would have gone."
EOD,
        "correct_choice" => <<<EOD
"If I had known about the meeting, I would have gone."
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
In the sentence "She will not go to the party unless she finishes her project," what verb tense is used in the dependent clause?
EOD,
        "choice_1" => <<<EOD
Present Tense
EOD,
        "choice_2" => <<<EOD
Past Tense
EOD,
        "choice_3" => <<<EOD
Future Tense
EOD,
        "choice_4" => <<<EOD
Present Perfect Tense
EOD,
        "correct_choice" => <<<EOD
Present Tense
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
What verb tense should be used in the dependent clause of the sentence "Before they arrive, we _______ (prepare) the food"?
EOD,
        "choice_1" => <<<EOD
prepare
EOD,
        "choice_2" => <<<EOD
prepared
EOD,
        "choice_3" => <<<EOD
have prepared
EOD,
        "choice_4" => <<<EOD
had prepared
EOD,
        "correct_choice" => <<<EOD
had prepared
EOD,
      ],
      [
        "topic_id" => 19,
        "question" => <<<EOD
Which of these sentences shows the correct use of future perfect tense in a complex sentence?
EOD,
        "choice_1" => <<<EOD
"When he arrives, I will have finished my work."
EOD,
        "choice_2" => <<<EOD
"When he will arrive, I will finish my work."
EOD,
        "choice_3" => <<<EOD
"When he arrives, I finish my work."
EOD,
        "choice_4" => <<<EOD
"When he arrived, I will finish my work."
EOD,
        "correct_choice" => <<<EOD
"When he arrives, I will have finished my work."
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
Which of the following sentences uses the Future Continuous Tense correctly?
EOD,
        "choice_1" => <<<EOD
"She will be teaching at 3 p.m."
EOD,
        "choice_2" => <<<EOD
"She will teach at 3 p.m."
EOD,
        "choice_3" => <<<EOD
"She is teaching at 3 p.m."
EOD,
        "choice_4" => <<<EOD
"She taught at 3 p.m."
EOD,
        "correct_choice" => <<<EOD
"She will be teaching at 3 p.m."
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
In the sentence "I will be reading when you arrive," which verb tense is used in the dependent clause?
EOD,
        "choice_1" => <<<EOD
Present Continuous
EOD,
        "choice_2" => <<<EOD
Present Perfect
EOD,
        "choice_3" => <<<EOD
Future Continuous
EOD,
        "choice_4" => <<<EOD
Past Continuous
EOD,
        "correct_choice" => <<<EOD
Future Continuous
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
Which of these sentences uses the Future Continuous Tense in the dependent clause?
EOD,
        "choice_1" => <<<EOD
"I will call you when I will be arriving."
EOD,
        "choice_2" => <<<EOD
"I will call you when I arrive."
EOD,
        "choice_3" => <<<EOD
"I call you when I arrive."
EOD,
        "choice_4" => <<<EOD
"I will call you when I will arrive."
EOD,
        "correct_choice" => <<<EOD
"I will call you when I arrive."
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
In the sentence "At 8 o’clock, they will be working on the project," which part of the sentence contains the Future Continuous Tense?
EOD,
        "choice_1" => <<<EOD
"At 8 o’clock"
EOD,
        "choice_2" => <<<EOD
"will be working"
EOD,
        "choice_3" => <<<EOD
"on the project"
EOD,
        "choice_4" => <<<EOD
"they"
EOD,
        "correct_choice" => <<<EOD
"will be working"
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
Which of the following sentences correctly uses the Future Continuous Tense?
EOD,
        "choice_1" => <<<EOD
"He will be playing soccer tomorrow evening."
EOD,
        "choice_2" => <<<EOD
"He plays soccer tomorrow evening."
EOD,
        "choice_3" => <<<EOD
"He played soccer tomorrow evening."
EOD,
        "choice_4" => <<<EOD
"He is playing soccer tomorrow evening."
EOD,
        "correct_choice" => <<<EOD
"He will be playing soccer tomorrow evening."
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
In the sentence "By this time tomorrow, I will be traveling," which tense is used in the main clause?
EOD,
        "choice_1" => <<<EOD
Future Continuous
EOD,
        "choice_2" => <<<EOD
Present Continuous
EOD,
        "choice_3" => <<<EOD
Future Perfect
EOD,
        "choice_4" => <<<EOD
Present Perfect
EOD,
        "correct_choice" => <<<EOD
Future Continuous
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
Which subordinating conjunction is used in the sentence "We will be leaving when the sun sets"?
EOD,
        "choice_1" => <<<EOD
If
EOD,
        "choice_2" => <<<EOD
Because
EOD,
        "choice_3" => <<<EOD
When
EOD,
        "choice_4" => <<<EOD
Before
EOD,
        "correct_choice" => <<<EOD
When
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
Choose the correct sentence using the Future Continuous Tense:
EOD,
        "choice_1" => <<<EOD
"I will be reading when you arrive."
EOD,
        "choice_2" => <<<EOD
"I will read when you arrive."
EOD,
        "choice_3" => <<<EOD
"I read when you arrive."
EOD,
        "choice_4" => <<<EOD
"I will reading when you arrive."
EOD,
        "correct_choice" => <<<EOD
"I will be reading when you arrive."
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
In the sentence "While I will be studying, you will be working," what action is ongoing in the future?
EOD,
        "choice_1" => <<<EOD
Studying
EOD,
        "choice_2" => <<<EOD
Working
EOD,
        "choice_3" => <<<EOD
Both actions
EOD,
        "choice_4" => <<<EOD
Neither action
EOD,
        "correct_choice" => <<<EOD
Both actions
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
What is the correct verb tense for this complex sentence: "I will be eating dinner when they arrive"?
EOD,
        "choice_1" => <<<EOD
Future Continuous
EOD,
        "choice_2" => <<<EOD
Future Perfect
EOD,
        "choice_3" => <<<EOD
Present Continuous
EOD,
        "choice_4" => <<<EOD
Past Continuous
EOD,
        "correct_choice" => <<<EOD
Future Continuous
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
Which sentence correctly uses the Future Continuous Tense?
EOD,
        "choice_1" => <<<EOD
"They will be watching a movie when I arrive."
EOD,
        "choice_2" => <<<EOD
"They watched a movie when I arrive."
EOD,
        "choice_3" => <<<EOD
"They will watch a movie when I arrive."
EOD,
        "choice_4" => <<<EOD
"They are watching a movie when I arrive."
EOD,
        "correct_choice" => <<<EOD
"They will be watching a movie when I arrive."
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
In the sentence "When I visit next week, I will be staying with my cousin," what is the tense in the dependent clause?
EOD,
        "choice_1" => <<<EOD
Present Continuous
EOD,
        "choice_2" => <<<EOD
Future Continuous
EOD,
        "choice_3" => <<<EOD
Present Perfect
EOD,
        "choice_4" => <<<EOD
Past Continuous
EOD,
        "correct_choice" => <<<EOD
Future Continuous
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
Which of the following sentences contains a Future Continuous Tense?
EOD,
        "choice_1" => <<<EOD
"I will be working on my project at 6 p.m."
EOD,
        "choice_2" => <<<EOD
"I work on my project at 6 p.m."
EOD,
        "choice_3" => <<<EOD
"I will work on my project at 6 p.m."
EOD,
        "choice_4" => <<<EOD
"I worked on my project at 6 p.m."
EOD,
        "correct_choice" => <<<EOD
"I will be working on my project at 6 p.m."
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
Choose the correct sentence with Future Continuous Tense:
EOD,
        "choice_1" => <<<EOD
"He will be cooking when you arrive."
EOD,
        "choice_2" => <<<EOD
"He cooks when you arrive."
EOD,
        "choice_3" => <<<EOD
"He will cook when you arrive."
EOD,
        "choice_4" => <<<EOD
"He cooked when you arrive."
EOD,
        "correct_choice" => <<<EOD
"He will be cooking when you arrive."
EOD,
      ],
      [
        "topic_id" => 20,
        "question" => <<<EOD
What is the future continuous verb form in the sentence "I will be traveling at 5 p.m. tomorrow"?
EOD,
        "choice_1" => <<<EOD
"will be"
EOD,
        "choice_2" => <<<EOD
"traveling"
EOD,
        "choice_3" => <<<EOD
"will be traveling"
EOD,
        "choice_4" => <<<EOD
"tomorrow"
EOD,
        "correct_choice" => <<<EOD
"will be traveling"
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Which of the following is the correct past tense of the verb "go"?
EOD,
        "choice_1" => <<<EOD
Go
EOD,
        "choice_2" => <<<EOD
Gone
EOD,
        "choice_3" => <<<EOD
Went
EOD,
        "choice_4" => <<<EOD
Going
EOD,
        "correct_choice" => <<<EOD
Went
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Choose the correct past participle of the verb "take."
EOD,
        "choice_1" => <<<EOD
Took
EOD,
        "choice_2" => <<<EOD
Taked
EOD,
        "choice_3" => <<<EOD
Taken
EOD,
        "choice_4" => <<<EOD
Taking
EOD,
        "correct_choice" => <<<EOD
Taken
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
In the sentence "She has written the report," which verb tense is used?
EOD,
        "choice_1" => <<<EOD
Present Continuous
EOD,
        "choice_2" => <<<EOD
Past Continuous
EOD,
        "choice_3" => <<<EOD
Present Perfect
EOD,
        "choice_4" => <<<EOD
Past Perfect
EOD,
        "correct_choice" => <<<EOD
Present Perfect
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Which of these is the correct past tense of the verb "eat"?
EOD,
        "choice_1" => <<<EOD
Eat
EOD,
        "choice_2" => <<<EOD
Ate
EOD,
        "choice_3" => <<<EOD
Eaten
EOD,
        "choice_4" => <<<EOD
Eating
EOD,
        "correct_choice" => <<<EOD
Ate
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
In the sentence "They had finished their work before the meeting started," what verb tense is used?
EOD,
        "choice_1" => <<<EOD
Present Perfect
EOD,
        "choice_2" => <<<EOD
Past Perfect
EOD,
        "choice_3" => <<<EOD
Simple Past
EOD,
        "choice_4" => <<<EOD
Future Perfect
EOD,
        "correct_choice" => <<<EOD
Past Perfect
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Choose the correct sentence:
EOD,
        "choice_1" => <<<EOD
"He has went to the store."
EOD,
        "choice_2" => <<<EOD
"He has gone to the store."
EOD,
        "choice_3" => <<<EOD
"He had gone to the store."
EOD,
        "choice_4" => <<<EOD
"He will gone to the store."
EOD,
        "correct_choice" => <<<EOD
"He has gone to the store."
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Which of these is the correct past participle of "run"?
EOD,
        "choice_1" => <<<EOD
Ran
EOD,
        "choice_2" => <<<EOD
Run
EOD,
        "choice_3" => <<<EOD
Runned
EOD,
        "choice_4" => <<<EOD
Running
EOD,
        "correct_choice" => <<<EOD
Run
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
What is the future tense form of the verb "speak"?
EOD,
        "choice_1" => <<<EOD
Spoke
EOD,
        "choice_2" => <<<EOD
Speaks
EOD,
        "choice_3" => <<<EOD
Speaking
EOD,
        "choice_4" => <<<EOD
Will speak
EOD,
        "correct_choice" => <<<EOD
Will speak
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Choose the correct sentence:
EOD,
        "choice_1" => <<<EOD
"They eats dinner at 7 p.m."
EOD,
        "choice_2" => <<<EOD
"They eaten dinner at 7 p.m."
EOD,
        "choice_3" => <<<EOD
"They eat dinner at 7 p.m."
EOD,
        "choice_4" => <<<EOD
"They ate dinner at 7 p.m."
EOD,
        "correct_choice" => <<<EOD
"They eat dinner at 7 p.m."
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
In the sentence "I will see her tomorrow," what tense is the verb "see"?
EOD,
        "choice_1" => <<<EOD
Present
EOD,
        "choice_2" => <<<EOD
Future
EOD,
        "choice_3" => <<<EOD
Past
EOD,
        "choice_4" => <<<EOD
Present Perfect
EOD,
        "correct_choice" => <<<EOD
Future
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Which sentence uses the correct past participle of the verb "write"?
EOD,
        "choice_1" => <<<EOD
"She writes the letter every day."
EOD,
        "choice_2" => <<<EOD
"She writed the letter yesterday."
EOD,
        "choice_3" => <<<EOD
"She written the letter yesterday."
EOD,
        "choice_4" => <<<EOD
"She wrote the letter yesterday."
EOD,
        "correct_choice" => <<<EOD
"She wrote the letter yesterday."
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Which of these sentences uses the Future Perfect tense correctly?
EOD,
        "choice_1" => <<<EOD
"I will have finished my homework by 7 p.m."
EOD,
        "choice_2" => <<<EOD
"I finished my homework by 7 p.m."
EOD,
        "choice_3" => <<<EOD
"I finish my homework by 7 p.m."
EOD,
        "choice_4" => <<<EOD
"I am finishing my homework by 7 p.m."
EOD,
        "correct_choice" => <<<EOD
"I will have finished my homework by 7 p.m."
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Choose the correct past tense form of the verb "come."
EOD,
        "choice_1" => <<<EOD
Come
EOD,
        "choice_2" => <<<EOD
Came
EOD,
        "choice_3" => <<<EOD
Coming
EOD,
        "choice_4" => <<<EOD
Comes
EOD,
        "correct_choice" => <<<EOD
Came
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
In the sentence "He had spoken to her before the meeting," what tense is the verb "spoken"?
EOD,
        "choice_1" => <<<EOD
Present Perfect
EOD,
        "choice_2" => <<<EOD
Past Perfect
EOD,
        "choice_3" => <<<EOD
Future Perfect
EOD,
        "choice_4" => <<<EOD
Simple Past
EOD,
        "correct_choice" => <<<EOD
Past Perfect
EOD,
      ],
      [
        "topic_id" => 21,
        "question" => <<<EOD
Which of the following sentences uses the correct past tense of the verb "begin"?
EOD,
        "choice_1" => <<<EOD
"They beginned the meeting at 9 a.m."
EOD,
        "choice_2" => <<<EOD
"They begin the meeting at 9 a.m."
EOD,
        "choice_3" => <<<EOD
"They began the meeting at 9 a.m."
EOD,
        "choice_4" => <<<EOD
"They begun the meeting at 9 a.m."
EOD,
        "correct_choice" => <<<EOD
"They began the meeting at 9 a.m."
EOD,
      ],
    ];

    foreach ($quizzes as $quiz) {
      ClassicStudyQuiz::create($quiz);
    }
  }
}