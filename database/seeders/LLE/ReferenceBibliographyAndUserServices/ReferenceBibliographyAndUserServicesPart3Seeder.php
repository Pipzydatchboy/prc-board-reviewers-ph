<?php

namespace Database\Seeders\LLE\ReferenceBibliographyAndUserServices;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReferenceBibliographyAndUserServicesPart3Seeder extends Seeder
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
            'part'        => 3,
            'question'    => 'Which tool is used to verify the validity of URLs in bibliographies?',
            'choices'     => json_encode([
                'Link checker',
                'URL shortener',
                'Citation manager',
                'Abstract database'
            ]),
            'answer'      => 'Link checker',
            'explanation' => 'Link checkers scan URLs to ensure they resolve and are not broken.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 2
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'What is the purpose of an open access repository?',
            'choices'     => json_encode([
                'Provide free access to scholarly works',
                'Sell journal subscriptions',
                'Host commercial ebooks',
                'Manage physical archives'
            ]),
            'answer'      => 'Provide free access to scholarly works',
            'explanation' => 'Open access repositories allow free public access to academic research outputs.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 3
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which classification divides journals into subject clusters for browsing?',
            'choices'     => json_encode([
                'Journal subject classification',
                'Dewey Decimal',
                'Library of Congress',
                'Faceted classification'
            ]),
            'answer'      => 'Journal subject classification',
            'explanation' => 'Journal classifications group serials by discipline for easier browse and retrieval.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 4
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'What service helps users track citations of their published works?',
            'choices'     => json_encode([
                'Citation alert',
                'Weeding service',
                'Catalog update',
                'Link resolver'
            ]),
            'answer'      => 'Citation alert',
            'explanation' => 'Citation alerts notify authors when their works are cited in new publications.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 5
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which tool resolves DOIs to resource locations?',
            'choices'     => json_encode([
                'DOI resolver',
                'URL shortener',
                'Link checker',
                'Catalog editor'
            ]),
            'answer'      => 'DOI resolver',
            'explanation' => 'DOI resolvers translate Digital Object Identifiers to current URLs for access.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 6
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'What is a federated vocabulary?',
            'choices'     => json_encode([
                'Unified terms drawn from multiple thesauri',
                'A single-subject thesaurus',
                'Library signage glossary',
                'User-contributed tags'
            ]),
            'answer'      => 'Unified terms drawn from multiple thesauri',
            'explanation' => 'Federated vocabularies integrate controlled terms across systems for consistent indexing.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 7
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which platform allows collaborative annotation of texts?',
            'choices'     => json_encode([
                'Hypothes.is',
                'OPAC',
                'ILS',
                'CMS'
            ]),
            'answer'      => 'Hypothes.is',
            'explanation' => 'Hypothes.is is a web annotation tool enabling public or private markup of digital texts.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 8
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'What does LCSH stand for?',
            'choices'     => json_encode([
                'Library of Congress Subject Headings',
                'Local Cataloging Standard Hierarchy',
                'Legal Citation and Subject Headings',
                'Library Classification System Handbook'
            ]),
            'answer'      => 'Library of Congress Subject Headings',
            'explanation' => 'LCSH is a controlled vocabulary used for subject cataloging of materials.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 9
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which report lists upcoming library events and workshops?',
            'choices'     => json_encode([
                'Program schedule',
                'Circulation report',
                'Acquisition report',
                'Weeding list'
            ]),
            'answer'      => 'Program schedule',
            'explanation' => 'Program schedules inform patrons of library-sponsored activities and education sessions.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 10
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which digital tool is used for citation management and collaboration?',
            'choices'     => json_encode([
                'Zotero',
                'MARC editor',
                'OPAC',
                'Link resolver'
            ]),
            'answer'      => 'Zotero',
            'explanation' => 'Zotero is a free reference manager facilitating citation organization and sharing.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 11
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which metric measures duration users spend on database platforms?',
            'choices'     => json_encode([
                'Session length',
                'Turnover rate',
                'Foot traffic',
                'Weeding rate'
            ]),
            'answer'      => 'Session length',
            'explanation' => 'Session length tracks how long patrons engage with digital resources per visit.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 12
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'What is the function of an OpenURL resolver?',
            'choices'     => json_encode([
                'Match metadata to full-text services',
                'Shorten URLs',
                'Convert ISBN to URL',
                'Translate languages'
            ]),
            'answer'      => 'Match metadata to full-text services',
            'explanation' => 'OpenURL resolvers link bibliographic metadata to accessible full-text content where licensed.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 13
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which technique organizes user feedback into service improvements?',
            'choices'     => json_encode([
                'User-centered evaluation',
                'Shelf reading',
                'Weeding',
                'Binding'
            ]),
            'answer'      => 'User-centered evaluation',
            'explanation' => 'User-centered evaluation uses patron input to iteratively improve services and interfaces.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 14
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'What does MARC stand for?',
            'choices'     => json_encode([
                'Machine-Readable Cataloging',
                'Meta-Archive Resource Container',
                'Machine Access Reference Code',
                'Metadata Retrieval and Control'
            ]),
            'answer'      => 'Machine-Readable Cataloging',
            'explanation' => 'MARC is the standard format for bibliographic data exchange.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 15
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which approach uses faceted terms to refine search results?',
            'choices'     => json_encode([
                'Faceted search',
                'Keyword search',
                'Boolean search',
                'Phrase search'
            ]),
            'answer'      => 'Faceted search',
            'explanation' => 'Faceted search lets users apply multiple filters to narrow results by categories.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 16
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'What service provides summaries of new research articles in a field?',
            'choices'     => json_encode([
                'Current awareness service',
                'Weeding list',
                'Binding schedule',
                'Shelf reading'
            ]),
            'answer'      => 'Current awareness service',
            'explanation' => 'Current awareness services deliver alerts or digests of latest publications.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 17
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which standard defines elements for digital preservation metadata?',
            'choices'     => json_encode([
                'PREMIS',
                'METS',
                'MODS',
                'Dublin Core'
            ]),
            'answer'      => 'PREMIS',
            'explanation' => 'PREMIS is the preservation metadata standard for tracking digital object lifecycle.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 18
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'What does SFX button do in a discovery layer?',
            'choices'     => json_encode([
                'Offers link to full-text via OpenURL',
                'Searches social networks',
                'Exports citations',
                'Updates catalog records'
            ]),
            'answer'      => 'Offers link to full-text via OpenURL',
            'explanation' => 'SFX is an OpenURL resolver branded service button in discovery interfaces.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 19
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'Which practice outlines user rights, privacy, and confidentiality?',
            'choices'     => json_encode([
                'Privacy policy',
                'Access policy',
                'Circulation policy',
                'Collection policy'
            ]),
            'answer'      => 'Privacy policy',
            'explanation' => 'Privacy policies ensure user data confidentiality and outline data usage.',
            'created_at'  => $now,
            'updated_at'  => $now,
        ],
        [ // 20
            'subject_id'  => 51,
            'part'        => 3,
            'question'    => 'What is the function of a usage analytics dashboard?',
            'choices'     => json_encode([
                'Display metrics on resource use and user behavior',
                'Manage catalog records',
                'Repair digital files',
                'Host digital exhibits'
            ]),
            'answer'      => 'Display metrics on resource use and user behavior',
            'explanation' => 'Dashboards visualize statistics like downloads, clicks, and session data.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
