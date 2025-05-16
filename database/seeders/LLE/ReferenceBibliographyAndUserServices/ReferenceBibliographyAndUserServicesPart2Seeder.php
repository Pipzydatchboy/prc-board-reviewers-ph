<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart2Seeder extends Seeder
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
      
       $batch = [
        [ // 1
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which directory provides current contact information for professionals and organizations?',
            'choices'     => json_encode([
                'Telephone directory',
                'Encyclopedia',
                'Directory of associations',
                'Bibliography'
            ]),
            'answer'      => 'Directory of associations',
            'explanation' => 'Directories of associations list professional bodies with contact details.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 2
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which reference source provides definitions and word origins?',
            'choices'     => json_encode([
                'Thesaurus',
                'Dictionary',
                'Atlas',
                'Abstract database'
            ]),
            'answer'      => 'Dictionary',
            'explanation' => 'Dictionaries give definitions, pronunciations, and etymologies of words.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 3
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'What is the function of an annotated bibliography?',
            'choices'     => json_encode([
                'Provides summary and evaluation of each entry',
                'Lists only titles',
                'Indexes authors',
                'Classifies by subject'
            ]),
            'answer'      => 'Provides summary and evaluation of each entry',
            'explanation' => 'Annotated bibliographies include descriptive and critical comments for sources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 4
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which service offers customized bibliographic searches for users?',
            'choices'     => json_encode([
                'Selective dissemination of information',
                'Circulation desk',
                'Shelf reading service',
                'Binding service'
            ]),
            'answer'      => 'Selective dissemination of information',
            'explanation' => 'SDI provides tailored updates to users based on profiles and interests.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 5
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'What does keyword indexing involve?',
            'choices'     => json_encode([
                'Assigning significant words to represent content',
                'Classifying by call number',
                'Binding books',
                'Cataloging authorities'
            ]),
            'answer'      => 'Assigning significant words to represent content',
            'explanation' => 'Keyword indexing uses terms from the text to facilitate retrieval.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 6
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which tool helps identify key concepts and synonyms for search?',
            'choices'     => json_encode([
                'Thesaurus',
                'Directory',
                'Dictionary',
                'Atlas'
            ]),
            'answer'      => 'Thesaurus',
            'explanation' => 'Thesauri list preferred terms and synonyms for effective searching.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 7
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'What is user literacy in a library context?',
            'choices'     => json_encode([
                'Ability to locate, evaluate, and use information',
                'Reading speed',
                'Writing skills',
                'Cataloging knowledge'
            ]),
            'answer'      => 'Ability to locate, evaluate, and use information',
            'explanation' => 'Information literacy empowers users to work effectively with information resources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 8
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which reference source lists statistical data on various topics?',
            'choices'     => json_encode([
                'Statistical abstract',
                'Dictionary',
                'Encyclopedia',
                'Atlas'
            ]),
            'answer'      => 'Statistical abstract',
            'explanation' => 'Statistical abstracts compile data, tables, and charts on diverse subjects.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 9
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'What service involves teaching users how to use library catalogs and databases?',
            'choices'     => json_encode([
                'User instruction',
                'Cataloging',
                'Reference processing',
                'Binding'
            ]),
            'answer'      => 'User instruction',
            'explanation' => 'User instruction sessions train patrons on search strategies and tools.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 10
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which bibliography includes primary sources only?',
            'choices'     => json_encode([
                'Primary bibliography',
                'Secondary bibliography',
                'Tertiary bibliography',
                'Subject bibliography'
            ]),
            'answer'      => 'Primary bibliography',
            'explanation' => 'Primary bibliographies list original works or first editions of texts.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 11
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'What is the purpose of a citation index?',
            'choices'     => json_encode([
                'To find articles that cite a specific work',
                'To list journal issues',
                'To catalog authors',
                'To manage call numbers'
            ]),
            'answer'      => 'To find articles that cite a specific work',
            'explanation' => 'Citation indexes track references between scholarly works.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 12
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which service gathers user feedback on library services?',
            'choices'     => json_encode([
                'User survey',
                'SDI service',
                'Bibliographic service',
                'Interlibrary loan'
            ]),
            'answer'      => 'User survey',
            'explanation' => 'Surveys collect patron opinions to improve services.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 13
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'What does virtual reference entail?',
            'choices'     => json_encode([
                'Providing reference services via chat and email',
                'In-person assistance only',
                'Catalog maintenance',
                'Binding services'
            ]),
            'answer'      => 'Providing reference services via chat and email',
            'explanation' => 'Virtual reference enables remote user support through digital channels.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 14
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which bibliography focuses on works about a specific subject?',
            'choices'     => json_encode([
                'Subject bibliography',
                'National bibliography',
                'Annotated bibliography',
                'Method bibliography'
            ]),
            'answer'      => 'Subject bibliography',
            'explanation' => 'Subject bibliographies list works on a defined topic or discipline.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 15
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'What is a webliography?',
            'choices'     => json_encode([
                'A list of web-based resources on a topic',
                'A printed bibliography',
                'A catalog of websites',
                'A directory of blogs'
            ]),
            'answer'      => 'A list of web-based resources on a topic',
            'explanation' => 'Webliographies compile websites and online materials relevant to a subject.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 16
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which reference tool lists synonyms and antonyms?',
            'choices'     => json_encode([
                'Thesaurus',
                'Dictionary',
                'Encyclopedia',
                'Atlas'
            ]),
            'answer'      => 'Thesaurus',
            'explanation' => 'Thesauri provide controlled vocabulary terms, including synonyms and antonyms.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 17
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'What is resource neutrality?',
            'choices'     => json_encode([
                'Evaluating resources without format bias',
                'Cataloging only print materials',
                'Preferring electronic over print',
                'Weeding old resources'
            ]),
            'answer'      => 'Evaluating resources without format bias',
            'explanation' => 'Resource neutrality means selecting materials based on content, not format.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 18
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which service assists users in planning their research strategy?',
            'choices'     => json_encode([
                'Research consultation',
                'Circulation service',
                'Binding service',
                'Shelf reading'
            ]),
            'answer'      => 'Research consultation',
            'explanation' => 'Consultations help users define and refine research questions and methods.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 19
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'What does RDA stand for in cataloging?',
            'choices'     => json_encode([
                'Resource Description and Access',
                'Reference Data Administration',
                'Research Data Archive',
                'Remote Database Access'
            ]),
            'answer'      => 'Resource Description and Access',
            'explanation' => 'RDA is the standard for descriptive cataloging guidelines.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 20
            'subject_id'  => 51,
            'part'        => 2,
            'question'    => 'Which feature allows users to save searches and receive alerts for new content?',
            'choices'     => json_encode([
                'Search alert',
                'Bookmark',
                'Shelf reading',
                'Weeding'
            ]),
            'answer'      => 'Search alert',
            'explanation' => 'Search alerts notify users by email or RSS when new items match saved queries.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}
