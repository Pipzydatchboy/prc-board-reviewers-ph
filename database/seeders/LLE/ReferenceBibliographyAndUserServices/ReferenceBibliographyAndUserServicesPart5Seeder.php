<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart5Seeder extends Seeder
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
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which index provides full-text access to Philippine law articles?',
            'choices'     => json_encode(['PhilJOL', 'LexLink', 'LegalCommons', 'GovArchive']),
            'answer'      => 'PhilJOL',
            'explanation' => 'PhilJOL offers full-text Philippine law journal articles.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'What does RSS feed stand for?',
            'choices'     => json_encode(['Really Simple Syndication', 'Rich Site Summary', 'Readable Site Stream', 'Rapid Site Subscription']),
            'answer'      => 'Really Simple Syndication',
            'explanation' => 'RSS delivers regularly changing web content in a simple format.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which tool converts bibliographic data to HTML pages for web display?',
            'choices'     => json_encode(['XSLT processor', 'MARC editor', 'PDF generator', 'Image converter']),
            'answer'      => 'XSLT processor',
            'explanation' => 'XSLT transforms XML (e.g., MARCXML) into HTML for web publishing.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'What is the main purpose of a faceted navigation system?',
            'choices'     => json_encode(['Allow multi-dimensional filtering of results', 'Improve network speed', 'Convert file formats', 'Generate citations']),
            'answer'      => 'Allow multi-dimensional filtering of results',
            'explanation' => 'Facets let users refine search results by multiple categories.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which metadata schema is optimized for digital libraries?',
            'choices'     => json_encode(['METS', 'MODS', 'Dublin Core', 'PREMIS']),
            'answer'      => 'MODS',
            'explanation' => 'MODS provides rich descriptive metadata for digital collections.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which service provides personalized reading lists to users?',
            'choices'     => json_encode(['Bibliographic instruction', 'Readers\' advisory', 'OPAC', 'ILS']),
            'answer'      => 'Readers\' advisory',
            'explanation' => 'Readers\' advisory matches user interests to recommended titles.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which technique organizes content by author, title, and subject headings?',
            'choices'     => json_encode(['Cataloging', 'Weeding', 'Binding', 'Shelving']),
            'answer'      => 'Cataloging',
            'explanation' => 'Cataloging applies rules to describe and organize items for retrieval.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'What does the term "metadata harvest" refer to?',
            'choices'     => json_encode(['Collecting metadata records via OAI-PMH', 'Binding books', 'Printing catalog cards', 'Weeding old records']),
            'answer'      => 'Collecting metadata records via OAI-PMH',
            'explanation' => 'Harvesting gathers metadata from repositories using OAI-PMH.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which service integrates AI-powered search suggestions?',
            'choices'     => json_encode(['Discovery layer', 'OPAC', 'I/O scheduler', 'File manager']),
            'answer'      => 'Discovery layer',
            'explanation' => 'Discovery platforms often incorporate AI for query suggestions and relevance.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'What is the purpose of an API key in library systems?',
            'choices'     => json_encode(['Authenticate applications accessing services', 'Bind books', 'Monitor user sessions', 'Schedule events']),
            'answer'      => 'Authenticate applications accessing services',
            'explanation' => 'API keys secure and identify authorized access to web services.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which report shows the most borrowed titles over a period?',
            'choices'     => json_encode(['Top circulation report', 'Usage analytics', 'Acquisition report', 'Catalog report']),
            'answer'      => 'Top circulation report',
            'explanation' => 'This report lists titles with highest loan counts.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which initiative promotes open textbooks to reduce student costs?',
            'choices'     => json_encode(['Open Access Textbook Project', 'Digital Lending', 'Interlibrary Loan', 'Bookmobile program']),
            'answer'      => 'Open Access Textbook Project',
            'explanation' => 'Open Access Textbook Projects create free educational resources.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which feature in OPAC allows user annotations?',
            'choices'     => json_encode(['Tagging and comments', 'Weeding list', 'Shelf map', 'Binding options']),
            'answer'      => 'Tagging and comments',
            'explanation' => 'Modern OPACs let users add personal tags and comments to records.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'What does an authority file control?',
            'choices'     => json_encode(['Names, subjects, uniform titles', 'Shelf order', 'Binding formats', 'Circulation stats']),
            'answer'      => 'Names, subjects, uniform titles',
            'explanation' => 'Authority files standardize headings for consistency.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which tool converts scanned pages into searchable text?',
            'choices'     => json_encode(['OCR software', 'Barcode scanner', 'Link checker', 'MARC editor']),
            'answer'      => 'OCR software',
            'explanation' => 'Optical character recognition turns images of text into machine-readable text.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which platform supports collaborative creation of bibliographies?',
            'choices'     => json_encode(['Zotero Group Libraries', 'OPAC', 'MARC editor', 'Discovery layer']),
            'answer'      => 'Zotero Group Libraries',
            'explanation' => 'Zotero lets multiple users share and edit bibliographic collections.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'What service provides SMS notifications for overdue items?',
            'choices'     => json_encode(['Mobile alerts', 'Email alerts', 'OPAC messages', 'Dashboard notices']),
            'answer'      => 'Mobile alerts',
            'explanation' => 'SMS/mobile alerts remind patrons of dues and overdue items.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which digital tool tracks user footprints on the library website?',
            'choices'     => json_encode(['Web analytics', 'IM session logs', 'MARC logs', 'Binding reports']),
            'answer'      => 'Web analytics',
            'explanation' => 'Web analytics platforms measure page views, clicks, and user paths.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'What is the purpose of a usage threshold in e-resource licenses?',
            'choices'     => json_encode(['Limit concurrent users', 'Track overdue fines', 'Generate citations', 'Bind digital files']),
            'answer'      => 'Limit concurrent users',
            'explanation' => 'Licenses often restrict number of simultaneous accesses.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'Which policy governs acceptable use of library computers and networks?',
            'choices'     => json_encode(['Acceptable Use Policy', 'Collection Development Policy', 'Privacy Policy', 'Circulation Policy']),
            'answer'      => 'Acceptable Use Policy',
            'explanation' => 'AUP outlines rules for computer and network use by patrons.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [
            'subject_id'  => 51,
            'part'        => 5,
            'question'    => 'What does a federated search query do?',
            'choices'     => json_encode(['Search multiple databases simultaneously', 'Search only catalog', 'Export citations', 'Print records']),
            'answer'      => 'Search multiple databases simultaneously',
            'explanation' => 'Federated search sends one query across various systems at once.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
