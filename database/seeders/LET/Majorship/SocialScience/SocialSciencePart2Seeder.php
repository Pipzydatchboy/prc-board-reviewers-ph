<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart2Seeder extends Seeder
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

       // Part 2 – Question 21
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which section of the Local Government Code defines the powers of barangays?',
           'choices'      => json_encode([
               'Section 16',
               'Section 20',
               'Section 25',
               'Section 28',
           ]),
           'answer'       => 'Section 16',
           'explanation'  => 'Section 16 of RA No. 7160 outlines the powers and functions of barangays.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 22
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which article of the 1987 Constitution mandates the State to protect and promote the right to health of the people?',
           'choices'      => json_encode([
               'Article II',
               'Article XIV',
               'Article XVI',
               'Article XVIII',
           ]),
           'answer'       => 'Article II',
           'explanation'  => 'Article II, Section 15 declares the State shall protect and promote the right to health of the people.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 23
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'What type of tax is imposed according to the taxpayer’s ability to pay?',
           'choices'      => json_encode([
               'Regressive tax',
               'Proportional tax',
               'Progressive tax',
               'Flat tax',
           ]),
           'answer'       => 'Progressive tax',
           'explanation'  => 'A progressive tax system increases tax rates as the taxable amount increases.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 24
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'The Philippine economy shifted from agriculture to services in which decade?',
           'choices'      => json_encode([
               '1960s',
               '1970s',
               '1980s',
               '1990s',
           ]),
           'answer'       => '1990s',
           'explanation'  => 'During the 1990s, services surpassed agriculture and industry as the primary GDP contributor.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 25
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Who founded the Katipunan in 1892?',
           'choices'      => json_encode([
               'Andrés Bonifacio',
               'José Rizal',
               'Emilio Aguinaldo',
               'Graciano López Jaena',
           ]),
           'answer'       => 'Andrés Bonifacio',
           'explanation'  => 'Andrés Bonifacio established the Katipunan to revolt against Spanish colonial rule.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 26
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which Philippine revolutionary leader was known as the "Sublime Paralytic"?',
           'choices'      => json_encode([
               'Emilio Aguinaldo',
               'Apolinario Mabini',
               'Andrés Bonifacio',
               'Marcelo H. del Pilar',
           ]),
           'answer'       => 'Apolinario Mabini',
           'explanation'  => 'Apolinario Mabini was called the "Sublime Paralytic" due to his intellect despite paralysis.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 27
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'What is the key provision of Republic Act No. 6657 (CARP) known as the Magna Carta for Farmers?',
           'choices'      => json_encode([
               'Land redistribution',
               'Credit assistance',
               'Farm-to-market roads',
               'Agricultural subsidies',
           ]),
           'answer'       => 'Land redistribution',
           'explanation'  => 'The Magna Carta for Farmers ensured redistribution of land to tenant farmers.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 28
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'In sociology, which term describes the hierarchical arrangement of social classes?',
           'choices'      => json_encode([
               'Stratification',
               'Institution',
               'Norm',
               'Value',
           ]),
           'answer'       => 'Stratification',
           'explanation'  => 'Social stratification refers to structured ranking of entire groups in society.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 29
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which anthropological concept promotes understanding cultures on their own terms?',
           'choices'      => json_encode([
               'Ethnocentrism',
               'Cultural relativism',
               'Xenocentrism',
               'Cultural diffusion',
           ]),
           'answer'       => 'Cultural relativism',
           'explanation'  => 'Cultural relativism advocates evaluating cultures based on their own values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 30
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which Filipino artist was declared National Artist for Music in 1973?',
           'choices'      => json_encode([
               'Lucino San Pedro',
               'Levi Celerio',
               'Antonio Molina',
               'Ryan Cayabyab',
           ]),
           'answer'       => 'Lucino San Pedro',
           'explanation'  => 'Lucino San Pedro was named National Artist for Music for his contributions to Philippine music.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 31
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'What term describes the gap between those with and without access to information technology?',
           'choices'      => json_encode([
               'Digital divide',
               'Digital native',
               'Information overload',
               'Net neutrality',
           ]),
           'answer'       => 'Digital divide',
           'explanation'  => 'The digital divide refers to disparities in access to computers and the internet.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 32
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'In Maslow’s hierarchy, which need is at the highest level?',
           'choices'      => json_encode([
               'Physiological',
               'Safety',
               'Esteem',
               'Self-actualization',
           ]),
           'answer'       => 'Self-actualization',
           'explanation'  => 'Self-actualization is the highest need, representing personal growth and fulfillment.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 33
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which plate boundary is characterized by plates sliding past each other?',
           'choices'      => json_encode([
               'Divergent',
               'Convergent',
               'Transform',
               'Subduction',
           ]),
           'answer'       => 'Transform',
           'explanation'  => 'Transform boundaries occur where plates slide horizontally past one another.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 34
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which country was a founding member of ASEAN in 1967 alongside the Philippines?',
           'choices'      => json_encode([
               'Japan',
               'India',
               'Thailand',
               'China',
           ]),
           'answer'       => 'Thailand',
           'explanation'  => 'Thailand, along with Indonesia, Malaysia, Singapore, and the Philippines, founded ASEAN in 1967.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 35
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Globalization primarily refers to:',
           'choices'      => json_encode([
               'Local trade',
               'Global integration',
               'Cultural isolation',
               'Political fragmentation',
           ]),
           'answer'       => 'Global integration',
           'explanation'  => 'Globalization involves increasing interdependence and integration of economies and cultures.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 36
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which sampling technique selects every nth element from a list?',
           'choices'      => json_encode([
               'Snowball sampling',
               'Purposive sampling',
               'Systematic sampling',
               'Cluster sampling',
           ]),
           'answer'       => 'Systematic sampling',
           'explanation'  => 'Systematic sampling uses a fixed interval to select subjects from a list.'
           ,'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 37
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which writ protects individuals from unlawful detention?',
           'choices'      => json_encode([
               'Habeas corpus',
               'Certiorari',
               'Amparo',
               'Kalayaan',
           ]),
           'answer'       => 'Habeas corpus',
           'explanation'  => 'The writ of habeas corpus ensures a detained person is brought before a court.'
           ,'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 38
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which principle of governance divides government into legislative, executive, and judicial branches?',
           'choices'      => json_encode([
               'Checks and balances',
               'Separation of powers',
               'Federalism',
               'Popular sovereignty',
           ]),
           'answer'       => 'Separation of powers',
           'explanation'  => 'Separation of powers prevents concentration of authority in one branch.'
           ,'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 39
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which electoral mechanism allocates seats to nationwide party-lists in the Philippines?',
           'choices'      => json_encode([
               'First-past-the-post',
               'Proportional representation',
               'Mixed-member',
               'Instant-runoff',
           ]),
           'answer'       => 'Proportional representation',
           'explanation'  => 'Party-list seats are filled using party vote percentages under proportional representation.'
           ,'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Question 40
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 2,
           'question'     => 'Which remedy protects constitutional rights against state actors under Republic Act No. 9994?',
           'choices'      => json_encode([
               'Writ of Habeas Corpus',
               'Writ of Amparo',
               'Writ of Kalikasan',
               'Writ of Mandamus',
           ]),
           'answer'       => 'Writ of Amparo',
           'explanation'  => 'Writ of Amparo protects individuals from violation of rights by state or non-state actors under RA 9994.'
           ,'created_at'   => $now,
           'updated_at'   => $now,
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
