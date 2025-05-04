<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       
       $batch = [];

       // 121
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which Shakespearean play features the line 'To be or not to be'?",
           'choices'     => json_encode([
               'Hamlet',
               'Macbeth',
               'Othello',
               'King Lear',
           ]),
           'answer'      => 'Hamlet',
           'explanation' => "The line 'To be or not to be' is from Shakespeare's tragedy 'Hamlet'.",
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 122
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Who wrote 'Paradise Lost'?",
           'choices'     => json_encode([
               'John Milton',
               'John Donne',
               'Thomas Hobbes',
               'Andrew Marvell',
           ]),
           'answer'      => 'John Milton',
           'explanation' => 'John Milton authored the epic poem "Paradise Lost".',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 123
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "William Wordsworth is associated with which literary movement?",
           'choices'     => json_encode([
               'Romanticism',
               'Enlightenment',
               'Renaissance',
               'Modernism',
           ]),
           'answer'      => 'Romanticism',
           'explanation' => 'Wordsworth was a central figure in the Romantic movement.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 124
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "What is the subtitle of Mary Shelley's 'Frankenstein'?",
           'choices'     => json_encode([
               'The Modern Prometheus',
               'The Last Man',
               'The Creature Within',
               'The Gothic Tale',
           ]),
           'answer'      => 'The Modern Prometheus',
           'explanation' => '"Frankenstein; or, The Modern Prometheus" is the full title.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 125
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Who is the author of 'Pride and Prejudice'?",
           'choices'     => json_encode([
               'Charlotte Brontë',
               'Jane Austen',
               'Emily Brontë',
               'Mary Shelley',
           ]),
           'answer'      => 'Jane Austen',
           'explanation' => 'Jane Austen wrote the novel "Pride and Prejudice".',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 126
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which two cities are referenced in Charles Dickens's 'A Tale of Two Cities'?",
           'choices'     => json_encode([
               'London and Paris',
               'London and Rome',
               'Paris and Rome',
               'London and Vienna',
           ]),
           'answer'      => 'London and Paris',
           'explanation' => 'The novel is set in London and Paris during the French Revolution.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 127
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which poet wrote 'Because I could not stop for Death'?",
           'choices'     => json_encode([
               'Emily Dickinson',
               'Walt Whitman',
               'Robert Frost',
               'Sylvia Plath',
           ]),
           'answer'      => 'Emily Dickinson',
           'explanation' => 'Emily Dickinson penned the poem "Because I could not stop for Death".',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 128
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which novel by James Joyce is considered a landmark of modernist literature?",
           'choices'     => json_encode([
               'Ulysses',
               'Dubliners',
               'A Portrait of the Artist as a Young Man',
               'Finnegans Wake',
           ]),
           'answer'      => 'Ulysses',
           'explanation' => '"Ulysses" is renowned for its stream-of-consciousness style and modernist innovation.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 129
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Who wrote 'The Great Gatsby'?",
           'choices'     => json_encode([
               'F. Scott Fitzgerald',
               'Ernest Hemingway',
               'John Steinbeck',
               'William Faulkner',
           ]),
           'answer'      => 'F. Scott Fitzgerald',
           'explanation' => 'Fitzgerald authored "The Great Gatsby" in 1925.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 130
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which author wrote 'The Adventures of Huckleberry Finn'?",
           'choices'     => json_encode([
               'Mark Twain',
               'Herman Melville',
               'Nathaniel Hawthorne',
               'Edgar Allan Poe',
           ]),
           'answer'      => 'Mark Twain',
           'explanation' => 'Mark Twain is the pen name of Samuel Clemens, author of Huck Finn.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 131
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which poet published 'Leaves of Grass'?",
           'choices'     => json_encode([
               'Walt Whitman',
               'Emily Dickinson',
               'Robert Frost',
               'T.S. Eliot',
           ]),
           'answer'      => 'Walt Whitman',
           'explanation' => 'Whitman’s "Leaves of Grass" is a foundational work of American poetry.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 132
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Who wrote 'Moby-Dick'?",
           'choices'     => json_encode([
               'Herman Melville',
               'Edgar Allan Poe',
               'Nathaniel Hawthorne',
               'Mark Twain',
           ]),
           'answer'      => 'Herman Melville',
           'explanation' => 'Melville authored the whaling epic "Moby-Dick" in 1851.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 133
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which literary technique is characterized by a character's inner thoughts presented uninterrupted?",
           'choices'     => json_encode([
               'Stream of consciousness',
               'Free indirect discourse',
               'Magical realism',
               'Allegory',
           ]),
           'answer'      => 'Stream of consciousness',
           'explanation' => 'This technique depicts thoughts in a continuous flow.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 134
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Who is the author of 'A Room of One's Own'?",
           'choices'     => json_encode([
               'Virginia Woolf',
               'E. M. Forster',
               'Dorothy Sayers',
               'Mary Wollstonecraft',
           ]),
           'answer'      => 'Virginia Woolf',
           'explanation' => 'Woolf’s extended essay on women and fiction was published in 1929.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 135
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "What narrative perspective is used in 'The Great Gatsby'?",
           'choices'     => json_encode([
               'First-person',
               'Third-person omniscient',
               'Second-person',
               'Third-person limited',
           ]),
           'answer'      => 'First-person',
           'explanation' => "Nick Carraway narrates Gatsby's story in first-person perspective.",
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 136
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Who wrote 'The Catcher in the Rye'?",
           'choices'     => json_encode([
               'J.D. Salinger',
               'Jack Kerouac',
               'Ken Kesey',
               'Ernest Hemingway',
           ]),
           'answer'      => 'J.D. Salinger',
           'explanation' => 'Salinger published the novel in 1951, making him famous.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 137
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which poem begins with 'Once upon a midnight dreary, while I pondered, weak and weary'?",
           'choices'     => json_encode([
               'The Raven',
               'Annabel Lee',
               'Ulysses',
               'Do Not Go Gentle into That Good Night',
           ]),
           'answer'      => 'The Raven',
           'explanation' => "Edgar Allan Poe's 'The Raven' opens with this famous line.",
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 138
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Who is known as the father of American Transcendentalism?",
           'choices'     => json_encode([
               'Ralph Waldo Emerson',
               'Henry David Thoreau',
               'Walt Whitman',
               'Emily Dickinson',
           ]),
           'answer'      => 'Ralph Waldo Emerson',
           'explanation' => 'Emerson’s essays and lectures established Transcendental philosophy.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 139
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which novel by Charlotte Brontë explores morality and social class?",
           'choices'     => json_encode([
               'Jane Eyre',
               'Wuthering Heights',
               'Agnes Grey',
               'Villette',
           ]),
           'answer'      => 'Jane Eyre',
           'explanation' => 'Charlotte Brontë’s "Jane Eyre" focuses on personal integrity and social criticism.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 140
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 7,
           'question'    => "Which American literary movement emphasized realistic portrayal of everyday life?",
           'choices'     => json_encode([
               'Realism',
               'Modernism',
               'Romanticism',
               'Postmodernism',
           ]),
           'answer'      => 'Realism',
           'explanation' => 'Realist writers focused on ordinary characters and social conditions.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       

        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}
