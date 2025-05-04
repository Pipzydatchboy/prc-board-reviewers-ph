<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart4Seeder extends Seeder
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

       // Part 4 – Question 61
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which provision of the 1987 Constitution establishes the State policy on family and population development?',
           'choices'      => json_encode([
               'Article II, Section 12',
               'Article III, Section 15',
               'Article XIV, Section 3',
               'Article XVI, Section 9',
           ]),
           'answer'       => 'Article II, Section 12',
           'explanation'  => 'Article II, Section 12 directs the State to equally protect the life of the mother and the life of the unborn from conception.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 62
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Who presides over the Senate of the Philippines?',
           'choices'      => json_encode([
               'President of the Senate',
               'Senate Majority Leader',
               'Vice President of the Philippines',
               'Speaker of the House',
           ]),
           'answer'       => 'Vice President of the Philippines',
           'explanation'  => 'By the 1987 Constitution, the Vice President is the President of the Senate.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 63
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which economic system allocates resources according to market forces of supply and demand?',
           'choices'      => json_encode([
               'Command economy',
               'Traditional economy',
               'Mixed economy',
               'Free market economy',
           ]),
           'answer'       => 'Free market economy',
           'explanation'  => 'A free market economy relies primarily on supply and demand without central planning.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 64
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Under the Local Government Code, what is the term length for a municipal mayor in the Philippines?',
           'choices'      => json_encode([
               '2 years',
               '3 years',
               '4 years',
               '6 years',
           ]),
           'answer'       => '3 years',
           'explanation'  => 'Municipal mayors serve three-year terms, renewable but not more than three consecutive terms.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 65
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which event is commemorated every June 12 in the Philippines?',
           'choices'      => json_encode([
               'Cry of Pugad Lawin',
               'Proclamation of Philippine Independence',
               'EDSA People Power',
               'Birth of José Rizal',
           ]),
           'answer'       => 'Proclamation of Philippine Independence',
           'explanation'  => 'June 12, 1898 marks the declaration of independence from Spain by Emilio Aguinaldo.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 66
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which Philippine hero authored the poem "Our Motherland"?',
           'choices'      => json_encode([
               'Marcelo H. del Pilar',
               'José Rizal',
               'Graciano López Jaena',
               'Andrés Bonifacio',
           ]),
           'answer'       => 'Marcelo H. del Pilar',
           'explanation'  => 'Del Pilar wrote patriotic works including "Our Motherland" (Nuestra Patria).',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 67
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which measure calculates changes in the price level of a market basket of consumer goods and services?',
           'choices'      => json_encode([
               'GDP deflator',
               'Consumer Price Index',
               'Producer Price Index',
               'Balance of Payments',
           ]),
           'answer'       => 'Consumer Price Index',
           'explanation'  => 'CPI tracks changes in consumer prices over time for a fixed basket of goods.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 68
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which anthropologist developed the theory of cultural relativism?',
           'choices'      => json_encode([
               'Bronislaw Malinowski',
               'Franz Boas',
               'Margaret Mead',
               'Clifford Geertz',
           ]),
           'answer'       => 'Franz Boas',
           'explanation'  => 'Franz Boas pioneered cultural relativism, arguing cultures must be understood on their own terms.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 69
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which theory in international relations emphasizes state survival and power as primary goals?',
           'choices'      => json_encode([
               'Liberalism',
               'Constructivism',
               'Realism',
               'Marxism',
           ]),
           'answer'       => 'Realism',
           'explanation'  => 'Realism views international politics as a struggle for power among self-interested states.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 70
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which economic indicator measures overall price changes in the economy?',
           'choices'      => json_encode([
               'GDP',
               'Unemployment rate',
               'Inflation rate',
               'Interest rate',
           ]),
           'answer'       => 'Inflation rate',
           'explanation'  => 'Inflation rate quantifies the rate at which the general price level rises, eroding purchasing power.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 71
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which social science research design examines phenomena at a single point in time?',
           'choices'      => json_encode([
               'Longitudinal study',
               'Cross-sectional study',
               'Experimental design',
               'Ethnography',
           ]),
           'answer'       => 'Cross-sectional study',
           'explanation'  => 'Cross-sectional studies collect data from a population at one specific point in time.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 72
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which phenomenon describes people moving from cities to rural areas?',
           'choices'      => json_encode([
               'Urbanization',
               'Counterurbanization',
               'Suburbanization',
               'Gentrification',
           ]),
           'answer'       => 'Counterurbanization',
           'explanation'  => 'Counterurbanization is the demographic and social process of population movement from urban to rural areas.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 73
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'What is the capital of the ASEAN secretariat?',
           'choices'      => json_encode([
               'Bangkok',
               'Jakarta',
               'Manila',
               'Kuala Lumpur',
           ]),
           'answer'       => 'Jakarta',
           'explanation'  => 'The ASEAN Secretariat is located in Jakarta, Indonesia.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 74
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which event triggered the 1986 People Power Revolution in the Philippines?',
           'choices'      => json_encode([
               'Murder of Ninoy Aquino',
               'Declaration of Martial Law',
               'Battle of Manila',
               'EDSA I',
           ]),
           'answer'       => 'Murder of Ninoy Aquino',
           'explanation'  => 'The assassination of Benigno Aquino Jr. in 1983 galvanized public dissent leading to EDSA I in 1986.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 75
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Under Philippine law, who has the exclusive power to declare war?',
           'choices'      => json_encode([
               'President',
               'Congress',
               'Supreme Court',
               'Philippine Senate',
           ]),
           'answer'       => 'Congress',
           'explanation'  => 'The 1987 Constitution vests in Congress the power to declare war.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 76
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which sector employs the largest percentage of the Philippine workforce as of latest data?',
           'choices'      => json_encode([
               'Agriculture',
               'Industry',
               'Services',
               'Construction',
           ]),
           'answer'       => 'Services',
           'explanation'  => 'The services sector dominates employment, reflecting the country’s economic shift.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 77
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which Filipino sociologist authored "The Filipino Worldview"?',
           'choices'      => json_encode([
               'Prospero Covar',
               'Clara M. Hildago',
               'Wanda Teo',
               'Jesusa CV Puno',
           ]),
           'answer'       => 'Jesusa CV Puno',
           'explanation'  => 'Jesusa CV Puno explored Filipino psychology and worldview concepts.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 78
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which law created the Philippine Electoral Commission in 1940?',
           'choices'      => json_encode([
               'Republic Act No. 7046',
               'Commonwealth Act No. 682',
               'Republic Act No. 7160',
               'Commonwealth Act No. 54',
           ]),
           'answer'       => 'Commonwealth Act No. 682',
           'explanation'  => 'Commonwealth Act No. 682 established the Philippine Electoral Commission in 1940.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 79
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which Asian city is known as a global financial hub alongside Singapore and Hong Kong?',
           'choices'      => json_encode([
               'Bangkok',
               'Tokyo',
               'Seoul',
               'Kuala Lumpur',
           ]),
           'answer'       => 'Tokyo',
           'explanation'  => 'Tokyo ranks among the world’s top financial centers with its major stock exchange.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 80
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 4,
           'question'     => 'Which body of water lies between the Philippines and Vietnam?',
           'choices'      => json_encode([
               'South China Sea',
               'Philippine Sea',
               'Celebes Sea',
               'Sulu Sea',
           ]),
           'answer'       => 'South China Sea',
           'explanation'  => 'The South China Sea separates the western coast of the Philippines from Vietnam.',
           'created_at'   => $now,
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
