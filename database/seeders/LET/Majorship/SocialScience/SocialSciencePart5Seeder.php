<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart5Seeder extends Seeder
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

       // Part 5 – Question 81
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which global organization was established in 1945 to promote international cooperation?',
           'choices'      => json_encode([
               'United Nations',
               'North Atlantic Treaty Organization',
               'Association of Southeast Asian Nations',
               'European Union',
           ]),
           'answer'       => 'United Nations',
           'explanation'  => 'The United Nations was founded in 1945 after World War II to foster international peace and security.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 82
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which Philippine president declared Martial Law in 1972?',
           'choices'      => json_encode([
               'Ferdinand Marcos',
               'Corazon Aquino',
               'Ramon Magsaysay',
               'Diosdado Macapagal',
           ]),
           'answer'       => 'Ferdinand Marcos',
           'explanation'  => 'President Ferdinand Marcos declared Martial Law on September 21, 1972, under Proclamation No. 1081.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 83
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Opportunity cost is best defined as the value of the:',
           'choices'      => json_encode([
               'Sunk cost',
               'Monetary cost',
               'Next best alternative foregone',
               'Total production cost',
           ]),
           'answer'       => 'Next best alternative foregone',
           'explanation'  => 'Opportunity cost represents the benefit of the next best alternative given up when making a choice.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 84
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which indicator measures the ratio of dependents to the working-age population?',
           'choices'      => json_encode([
               'Unemployment rate',
               'Dependency ratio',
               'Labor force participation rate',
               'Poverty incidence',
           ]),
           'answer'       => 'Dependency ratio',
           'explanation'  => 'Dependency ratio compares the combined population of children and elderly to those of working age.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 85
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'In sociology, which term denotes change in social status within an individual\'s lifetime?',
           'choices'      => json_encode([
               'Intergenerational mobility',
               'Intragenerational mobility',
               'Social stratification',
               'Role conflict',
           ]),
           'answer'       => 'Intragenerational mobility',
           'explanation'  => 'Intragenerational mobility refers to the upward or downward movement in social status within one generation.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 86
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Who authored the Filipino novel "El Filibusterismo"?',
           'choices'      => json_encode([
               'Marcelo H. del Pilar',
               'José Rizal',
               'Andrés Bonifacio',
               'Graciano López Jaena',
           ]),
           'answer'       => 'José Rizal',
           'explanation'  => 'José Rizal wrote "El Filibusterismo" as a sequel to "Noli Me Tangere" to expose colonial abuses.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 87
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which writ was introduced in Philippine jurisprudence in 2007 to safeguard constitutional rights?',
           'choices'      => json_encode([
               'Writ of Habeas Corpus',
               'Writ of Amparo',
               'Writ of Kalikasan',
               'Writ of Mandamus',
           ]),
           'answer'       => 'Writ of Amparo',
           'explanation'  => 'The Writ of Amparo protects individuals against rights violations by state or non-state actors under RA 9994.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 88
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'In which year did the Philippine–American War officially end?',
           'choices'      => json_encode([
               '1898',
               '1901',
               '1902',
               '1910',
           ]),
           'answer'       => '1902',
           'explanation'  => 'The Philippine–American War ended in 1902 when President Theodore Roosevelt declared the end of hostilities.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 89
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which Filipino painter is known as the "Grand Old Man" of Philippine art?',
           'choices'      => json_encode([
               'Carlos "Botong" Francisco',
               'Fernando Amorsolo',
               'Benedicto Cabrera',
               'Victorio Edades',
           ]),
           'answer'       => 'Fernando Amorsolo',
           'explanation'  => 'Fernando Amorsolo is celebrated for his luminous landscapes and portraiture, earning him this title.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 90
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which branch of government is tasked with interpreting laws in the Philippines?',
           'choices'      => json_encode([
               'Legislative',
               'Executive',
               'Judicial',
               'Administrative',
           ]),
           'answer'       => 'Judicial',
           'explanation'  => 'The Judicial branch, headed by the Supreme Court, interprets and applies the law.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 91
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which festival in the Philippines features the Sinulog dance?',
           'choices'      => json_encode([
               'Ati-Atihan',
               'Sinulog',
               'Dinagyang',
               'MassKara',
           ]),
           'answer'       => 'Sinulog',
           'explanation'  => 'The Sinulog Festival in Cebu features a traditional dance called Sinulog honoring Santo Niño.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 92
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which Republic Act promotes the welfare of persons with disabilities in the Philippines?',
           'choices'      => json_encode([
               'RA 7277',
               'RA 9262',
               'RA 10354',
               'RA 9072',
           ]),
           'answer'       => 'RA 7277',
           'explanation'  => 'Republic Act No. 7277, or the Magna Carta for Disabled Persons, protects the rights of PWDs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 93
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which social research method uses open-ended interviews to gather in-depth data?',
           'choices'      => json_encode([
               'Survey research',
               'Ethnography',
               'Case study',
               'Qualitative interviews',
           ]),
           'answer'       => 'Qualitative interviews',
           'explanation'  => 'Qualitative interviews involve open-ended questions to explore participants’ perspectives.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 94
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which ICT trend is characterized by decentralized ledger technology?',
           'choices'      => json_encode([
               'Cloud computing',
               'Big data',
               'Blockchain',
               'Internet of Things',
           ]),
           'answer'       => 'Blockchain',
           'explanation'  => 'Blockchain uses a distributed ledger to record transactions securely and transparently.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 95
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which organization succeeded the GATT in 1995?',
           'choices'      => json_encode([
               'World Trade Organization',
               'International Monetary Fund',
               'World Bank',
               'European Union',
           ]),
           'answer'       => 'World Trade Organization',
           'explanation'  => 'The WTO began operations in 1995, replacing the General Agreement on Tariffs and Trade.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 96
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which Act is known as the Anti-Violence Against Women and Their Children Act?',
           'choices'      => json_encode([
               'RA 7277',
               'RA 9262',
               'RA 9994',
               'RA 10354',
           ]),
           'answer'       => 'RA 9262',
           'explanation'  => 'Republic Act No. 9262 addresses violence against women and their children.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 97
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Economies of scale occur when average costs:',
           'choices'      => json_encode([
               'Increase as output increases',
               'Remain constant as output increases',
               'Decrease as output increases',
               'Vary randomly',
           ]),
           'answer'       => 'Decrease as output increases',
           'explanation'  => 'Economies of scale reduce average cost per unit as production volume rises.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 98
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which wind farm in the Philippines is famous for its scenic turbines in Ilocos Norte?',
           'choices'      => json_encode([
               'Bamban Wind Farm',
               'Baguio Wind Power',
               'Bangui Windmills',
               'Batanes Wind Project',
           ]),
           'answer'       => 'Bangui Windmills',
           'explanation'  => 'The Bangui Windmills along the Bangui Bay are a landmark and renewable energy source.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 99
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which provision mandates the promotion of Filipino as the national language?',
           'choices'      => json_encode([
               'Article XIV, Section 4',
               'Article XIV, Section 6',
               'Article XV, Section 3',
               'Article II, Section 7',
           ]),
           'answer'       => 'Article XIV, Section 6',
           'explanation'  => 'Article XIV, Section 6 tasks the State to develop and promote the Filipino language.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];
       
       // Part 5 – Question 100
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 5,
           'question'     => 'Which body adopted the Universal Declaration of Human Rights in 1948?',
           'choices'      => json_encode([
               'United Nations General Assembly',
               'International Court of Justice',
               'World Health Organization',
               'Human Rights Council',
           ]),
           'answer'       => 'United Nations General Assembly',
           'explanation'  => 'The UDHR was proclaimed by the UN General Assembly on December 10, 1948.',
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
