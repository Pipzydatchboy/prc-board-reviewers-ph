<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart6Seeder extends Seeder
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

       // Part 6 – Question 101
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which body conducts the official count of votes during Philippine national elections?',
           'choices'      => json_encode([
               'Commission on Elections (COMELEC)',
               'House of Representatives',
               'Supreme Court',
               'Commission on Audit',
           ]),
           'answer'       => 'Commission on Elections (COMELEC)',
           'explanation'  => 'COMELEC is constitutionally mandated to supervise and administer elections.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 102
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Under RA 6713, which principle requires public officials to avoid conflicts of interest?',
           'choices'      => json_encode([
               'Transparency',
               'Accountability',
               'Integrity',
               'Impartiality',
           ]),
           'answer'       => 'Impartiality',
           'explanation'  => 'Impartiality ensures officials perform duties without bias or conflict of interest.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 103
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which Philippine president initiated the "Build, Build, Build" infrastructure program?',
           'choices'      => json_encode([
               'Rodrigo Duterte',
               'Benigno Aquino III',
               'Gloria Macapagal Arroyo',
               'Joseph Estrada',
           ]),
           'answer'       => 'Rodrigo Duterte',
           'explanation'  => 'President Duterte launched the program to accelerate infrastructure development.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 104
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which sector of the economy employs the highest number of overseas Filipino workers?',
           'choices'      => json_encode([
               'Healthcare',
               'Information Technology',
               'Construction',
               'Entertainment',
           ]),
           'answer'       => 'Healthcare',
           'explanation'  => 'The healthcare sector, including nursing, employs the largest OFW population.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 105
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which Freudian defense mechanism involves attributing one’s own unacceptable feelings to others?',
           'choices'      => json_encode([
               'Sublimation',
               'Projection',
               'Rationalization',
               'Denial',
           ]),
           'answer'       => 'Projection',
           'explanation'  => 'Projection involves seeing one’s own desires or faults in others.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 106
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which protocol is used to transfer hypertext documents on the World Wide Web?',
           'choices'      => json_encode([
               'FTP',
               'SMTP',
               'HTTP',
               'TCP',
           ]),
           'answer'       => 'HTTP',
           'explanation'  => 'HTTP (HyperText Transfer Protocol) is the foundation of data communication on the Web.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 107
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which research method quantifies relationships between variables using statistical analysis?',
           'choices'      => json_encode([
               'Qualitative research',
               'Quantitative research',
               'Ethnography',
               'Case study',
           ]),
           'answer'       => 'Quantitative research',
           'explanation'  => 'Quantitative research uses numerical data to test hypotheses and establish patterns.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 108
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'What principle holds that the Constitution is the supreme law and laws contrary are void?',
           'choices'      => json_encode([
               'Rule of law',
               'Separation of powers',
               'Supremacy of the Constitution',
               'Judicial review',
           ]),
           'answer'       => 'Supremacy of the Constitution',
           'explanation'  => 'The Supremacy Clause establishes that the Constitution overrides other laws.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 109
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which Republic Act is known as the Government Procurement Reform Act?',
           'choices'      => json_encode([
               'RA 9184',
               'RA 7277',
               'RA 9994',
               'RA 6713',
           ]),
           'answer'       => 'RA 9184',
           'explanation'  => 'RA 9184 was enacted to streamline and improve government procurement processes.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 110
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which Philippine tax is based on the assessed value of real property?',
           'choices'      => json_encode([
               'Income tax',
               'Estate tax',
               'Value Added Tax',
               'Real property tax',
           ]),
           'answer'       => 'Real property tax',
           'explanation'  => 'Real property tax is imposed annually on land, buildings, and other improvements.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 111
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'What is the name of the highest mountain in the Philippines?',
           'choices'      => json_encode([
               'Mount Pinatubo',
               'Mount Mayon',
               'Mount Apo',
               'Mount Pulag',
           ]),
           'answer'       => 'Mount Apo',
           'explanation'  => 'Mount Apo on Mindanao is the highest peak in the Philippines at 2,954 meters.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 112
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which socialization agent primarily influences a child’s early behavior?',
           'choices'      => json_encode([
               'School',
               'Media',
               'Family',
               'Peers',
           ]),
           'answer'       => 'Family',
           'explanation'  => 'Family is the first agent of socialization shaping a child’s values and behaviors.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 113
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which philosopher is known for formulating the Categorical Imperative?',
           'choices'      => json_encode([
               'Plato',
               'Aristotle',
               'Immanuel Kant',
               'John Stuart Mill',
           ]),
           'answer'       => 'Immanuel Kant',
           'explanation'  => 'Kant’s Categorical Imperative is a foundational concept in deontological ethics.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 114
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which economist wrote "The Wealth of Nations" in 1776?',
           'choices'      => json_encode([
               'David Ricardo',
               'Adam Smith',
               'Thomas Malthus',
               'Karl Marx',
           ]),
           'answer'       => 'Adam Smith',
           'explanation'  => 'Smith’s work laid the foundations of classical economics and free-market theory.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 115
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'What is the primary function of the Commission on Audit (COA)?',
           'choices'      => json_encode([
               'Supervise elections',
               'Audit government funds',
               'Enforce laws',
               'Manage public debt',
           ]),
           'answer'       => 'Audit government funds',
           'explanation'  => 'COA examines, audits, and settles accounts of government agencies.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 116
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which act is known as the Tydings-McDuffie Act of 1934?',
           'choices'      => json_encode([
               'Commonwealth Act No. 1',
               'Philippine Independence Act',
               'Jones Law',
               'Revised Administrative Code',
           ]),
           'answer'       => 'Philippine Independence Act',
           'explanation'  => 'The Tydings-McDuffie Act provided for a ten-year transition to full independence.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 117
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which geographic feature is the Philippines part of, making it prone to earthquakes and volcanoes?',
           'choices'      => json_encode([
               'Ring of Fire',
               'Great Rift Valley',
               'Pacific Plate',
               'Andean Belt',
           ]),
           'answer'       => 'Ring of Fire',
           'explanation'  => 'The Philippines lies along the Pacific Ring of Fire, characterized by seismic activity.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 118
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which indicator measures the average number of births per woman?',
           'choices'      => json_encode([
               'Crude birth rate',
               'Fertility rate',
               'Life expectancy',
               'Infant mortality rate',
           ]),
           'answer'       => 'Fertility rate',
           'explanation'  => 'Total fertility rate estimates the average births a woman will have during her lifetime.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 119
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which event in 2001 led to the second People Power Revolution (EDSA II)?',
           'choices'      => json_encode([
               'Assassination of Ninoy Aquino',
               'Ouster of President Estrada',
               'Declaration of Martial Law',
               'EDSA III protests',
           ]),
           'answer'       => 'Ouster of President Estrada',
           'explanation'  => 'Widespread protests in January 2001 demanded President Estrada’s resignation, leading to EDSA II.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 6 – Question 120
       $batch[] = [
           'subject_id'   => 14,
           'part'         => 6,
           'question'     => 'Which process refers to the increasing interdependence of world economies and cultures?',
           'choices'      => json_encode([
               'Urbanization',
               'Globalization',
               'Localization',
               'Digitalization',
           ]),
           'answer'       => 'Globalization',
           'explanation'  => 'Globalization is the process of interaction and integration among people, companies, and governments globally.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
