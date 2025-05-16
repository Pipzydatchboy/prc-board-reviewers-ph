<?php

namespace Database\Seeders\LLE\CatalogingAndClassification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CatalogingAndClassificationPart1Seeder extends Seeder
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
        // 1
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which character prefixes subfields in a MARC record?',
            'choices'     => json_encode(['|', '$', '*', ':']),
            'answer'      => '$',
            'explanation' => 'Subfields in MARC records are indicated by the dollar sign delimiter.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 2
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which field in MARC holds the title and statement of responsibility?',
            'choices'     => json_encode(['245', '100', '300', '008']),
            'answer'      => '245',
            'explanation' => 'MARC tag 245 contains the title information and statement of responsibility.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 3
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'What is the Cutter number used for in a call number?',
            'choices'     => json_encode(['Represent author or title', 'Indicate publication date', 'Show classification scheme', 'Track circulation']),
            'answer'      => 'Represent author or title',
            'explanation' => 'Cutter numbers allow alphabetical arrangement by author or title within a class.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 4
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which classification system uses a purely numeric notation?',
            'choices'     => json_encode(['Dewey Decimal Classification', 'Library of Congress Classification', 'Colon Classification', 'Universal Decimal Classification']),
            'answer'      => 'Dewey Decimal Classification',
            'explanation' => 'DDC employs three-digit numeric classes with decimal subdivisions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 5
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'What principle does Library of Congress Classification follow?',
            'choices'     => json_encode(['Enumerative classification', 'Faceted classification', 'Analytico-synthetic classification', 'Dimensional classification']),
            'answer'      => 'Analytico-synthetic classification',
            'explanation' => 'LCC allows synthesis of notation for complex topics, combining facets analytically.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 6
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which resource provides authorized headings for names and subjects?',
            'choices'     => json_encode(['Authority file', 'Union catalog', 'OPAC', 'Thesaurus']),
            'answer'      => 'Authority file',
            'explanation' => 'Authority files standardize headings ensuring consistency in catalog records.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 7
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'In FRBR, which entity represents the intellectual content?',
            'choices'     => json_encode(['Work', 'Expression', 'Manifestation', 'Item']),
            'answer'      => 'Work',
            'explanation' => 'A Work is the conceptual essence distinct from its physical embodiments.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 8
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which AACR2 chapter covers choice and form of headings?',
            'choices'     => json_encode(['Chapter 21', 'Chapter 1', 'Chapter 5', 'Chapter 10']),
            'answer'      => 'Chapter 21',
            'explanation' => 'AACR2 Chapter 21 provides rules for headings and references in bibliographic records.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 9
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'What does the MARC leader field describe?',
            'choices'     => json_encode(['Record characteristics', 'Subject headings', 'Summary notes', 'Classification numbers']),
            'answer'      => 'Record characteristics',
            'explanation' => 'The leader encodes information about the record type and length.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 10
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which indicator in MARC controls text display?',
            'choices'     => json_encode(['First and second indicators', 'Subfield codes', 'Control fields', 'Tag numbers']),
            'answer'      => 'First and second indicators',
            'explanation' => 'Indicators modify the meaning of tags, controlling display and processing.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 11
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'What is shelf-ready processing?',
            'choices'     => json_encode(['Pre-processing items for immediate shelving', 'Cataloging rare books', 'Binding serials', 'Weeding outdated materials']),
            'answer'      => 'Pre-processing items for immediate shelving',
            'explanation' => 'Shelf-ready processing includes labeling, covering, and stamping before shelving.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 12
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which schedule in DDC covers technology?',
            'choices'     => json_encode(['600s', '000s', '300s', '800s']),
            'answer'      => '600s',
            'explanation' => 'DDC Class 600 covers applied sciences and technology.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 13
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'What is a uniform title?',
            'choices'     => json_encode(['Standard title for works with multiple versions', 'Title on the spine label', 'Series title', 'Local classmark']),
            'answer'      => 'Standard title for works with multiple versions',
            'explanation' => 'Uniform titles collocate different editions or translations under one heading.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 14
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which classification uses notation reflecting subject hierarchy with decimals?',
            'choices'     => json_encode(['Dewey Decimal Classification', 'Colon Classification', 'LCC', 'UDC']),
            'answer'      => 'Dewey Decimal Classification',
            'explanation' => 'DDC decimals allow hierarchical expansion of classes.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 15
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'What does RDA Toolkit provide?',
            'choices'     => json_encode(['Online cataloging instructions and guidelines', 'Digital preservation storage', 'OPAC interface', 'Budgeting tools']),
            'answer'      => 'Online cataloging instructions and guidelines',
            'explanation' => 'RDA Toolkit is a subscription service offering updated cataloging rules.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 16
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which MARC field contains subject headings?',
            'choices'     => json_encode(['6XX', '1XX', '2XX', '8XX']),
            'answer'      => '6XX',
            'explanation' => 'Fields 600-699 hold topical, geographical, and other subject headings.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 17
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'What is the Cutter-Sanborn Three-Figure Table used for?',
            'choices'     => json_encode(['Generating Cutter numbers', 'Dewey classification', 'Subject analysis', 'Authority control']),
            'answer'      => 'Generating Cutter numbers',
            'explanation' => 'The Sanborn table assigns numeric Cutter numbers for names and titles.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 18
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which concept ensures bibliographic records remain current?',
            'choices'     => json_encode(['Continuous data maintenance', 'One-time cataloging', 'Shelf reading', 'Binding']),
            'answer'      => 'Continuous data maintenance',
            'explanation' => 'Ongoing updates to records maintain accuracy and completeness.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 19
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'Which element in a MARC record indicates bibliographic level?',
            'choices'     => json_encode(['Leader position 06', 'Tag 245', 'Field 300', 'Indicator 2']),
            'answer'      => 'Leader position 06',
            'explanation' => 'Position 06 of the leader defines the bibliographic level of the record.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        // 20
        [
            'subject_id'  => 53,
            'part'        => 1,
            'question'    => 'What does the control field 008 in a MARC record specify?',
            'choices'     => json_encode(['Fixed-length data elements like dates and language', 'Subject headings', 'Classification numbers', 'Annotations']),
            'answer'      => 'Fixed-length data elements like dates and language',
            'explanation' => 'Field 008 contains coded fixed-length data elements including date and language information.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}
