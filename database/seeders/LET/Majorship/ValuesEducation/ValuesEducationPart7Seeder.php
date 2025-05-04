<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart7Seeder extends Seeder
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

       // Part 7 – Question 1
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which proclamation formally installed the Moral Recovery Program in the Philippines?',
           'choices'      => json_encode([
               'Proclamation No. 62, s. 1992',
               'Proclamation No. 170, s. 1993',
               'Proclamation No. 713, s. 1992',
               'Proclamation No. 9155, s. 2001',
           ]),
           'answer'       => 'Proclamation No. 62, s. 1992',
           'explanation'  => 'Proclamation No. 62 (30 September 1992) by President Ramos formally declared the Moral Recovery Program.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 2
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which president signed Proclamation No. 62 establishing the Moral Recovery Program?',
           'choices'      => json_encode([
               'Corazon Aquino',
               'Fidel V. Ramos',
               'Joseph Estrada',
               'Gloria Macapagal Arroyo',
           ]),
           'answer'       => 'Fidel V. Ramos',
           'explanation'  => 'President Fidel V. Ramos signed Proclamation No. 62 on 30 September 1992 to launch the MRP.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 3
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'In what year was Proclamation No. 62 issued to create the MRP?',
           'choices'      => json_encode([
               '1988',
               '1992',
               '1993',
               '2001',
           ]),
           'answer'       => '1992',
           'explanation'  => 'Proclamation No. 62 was issued in 1992 to formalize the Moral Recovery Program.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 4
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which memorandum order authorized five-day MRP workshops for the Office of the President?',
           'choices'      => json_encode([
               'Memorandum Order No. 62, s. 1992',
               'Memorandum Order No. 170, s. 1993',
               'Memorandum Order No. 713, s. 1992',
               'Memorandum Order No. 9155, s. 2001',
           ]),
           'answer'       => 'Memorandum Order No. 170, s. 1993',
           'explanation'  => 'MO No. 170 (29 September 1993) authorized a five-day Moral Recovery Program workshop for presidential staff.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 5
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'MRP workshops were initially conducted over how many days?',
           'choices'      => json_encode([
               'Three days',
               'Five days',
               'Seven days',
               'Ten days',
           ]),
           'answer'       => 'Five days',
           'explanation'  => 'The initial Moral Recovery Program workshops lasted five days.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 6
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which office was mandated to launch and oversee the MRP workshops?',
           'choices'      => json_encode([
               'Department of Education',
               'Office of the President (Proper)',
               'Department of the Interior',
               'Department of Justice',
           ]),
           'answer'       => 'Office of the President (Proper)',
           'explanation'  => 'The Office of the President (Proper) was tasked to implement the initial MRP workshops.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 7
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'One key objective of the MRP was to eradicate which social ill?',
           'choices'      => json_encode([
               'Poverty',
               'Illiteracy',
               'Corruption',
               'Unemployment',
           ]),
           'answer'       => 'Corruption',
           'explanation'  => 'The Moral Recovery Program aimed to address and eradicate corruption among public servants.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 8
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which core value of the MRP emphasizes truthfulness and moral uprightness?',
           'choices'      => json_encode([
               'Compassion',
               'Justice',
               'Integrity',
               'Respect',
           ]),
           'answer'       => 'Integrity',
           'explanation'  => 'Integrity was promoted in the MRP as essential for public accountability and moral conduct.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 9
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which MRP core value focuses on caring concern for others?',
           'choices'      => json_encode([
               'Integrity',
               'Compassion',
               'Discipline',
               'Patriotism',
           ]),
           'answer'       => 'Compassion',
           'explanation'  => 'Compassion was underscored in the MRP to foster empathy and solidarity.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 10
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which department integrated MRP values into the Edukasyon sa Pagpapakatao curriculum?',
           'choices'      => json_encode([
               'Department of Social Welfare',
               'Department of Education',
               'Department of Labor',
               'Department of Health',
           ]),
           'answer'       => 'Department of Education',
           'explanation'  => 'The Department of Education (DepEd) incorporated MRP values into the EsP subject guidelines.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 11
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Under which DepEd order were policy guidelines for Grades 1–10 of K to 12 issued to continue Values Education under MRP?',
           'choices'      => json_encode([
               'DepEd Order No. 6, s. 1988',
               'DepEd Order No. 713, s. 1993',
               'DepEd Order No. 31, s. 2012',
               'DepEd Order No. 62, s. 1992',
           ]),
           'answer'       => 'DepEd Order No. 31, s. 2012',
           'explanation'  => 'DepEd Order No. 31 s. 2012 provided the guidelines for implementing EsP under the K to 12 program.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 12
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'The Moral Recovery Program of 1992 viewed moral recovery as integral to success in which areas?',
           'choices'      => json_encode([
               'Sports and athletics',
               'Economic development and people empowerment',
               'Technological innovation',
               'Foreign affairs',
           ]),
           'answer'       => 'Economic development and people empowerment',
           'explanation'  => 'MRP linked moral recovery to the effectiveness of the government’s development and empowerment programs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 13
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which memorandum order amended MO No. 170 to adjust MRP workshop guidelines?',
           'choices'      => json_encode([
               'MO No. 62, s. 1992',
               'MO No. 171, s. 1993',
               'MO No. 713, s. 1993',
               'MO No. 9155, s. 2001',
           ]),
           'answer'       => 'MO No. 171, s. 1993',
           'explanation'  => 'Memorandum Order No. 171 (13 October 1993) amended the original MRP workshop directive.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 14
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Momentum for the Moral Recovery Program was interrupted by the impeachment of which president in 2000?',
           'choices'      => json_encode([
               'Fidel V. Ramos',
               'Joseph Estrada',
               'Gloria Macapagal Arroyo',
               'Benigno Aquino III',
           ]),
           'answer'       => 'Joseph Estrada',
           'explanation'  => 'Public investigations and impeachment of President Estrada in 2000 disrupted MRP momentum.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 15
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which executive order established the Presidential Council on Values Formation to support MRP?',
           'choices'      => json_encode([
               'EO No. 62',
               'EO No. 170',
               'EO No. 713',
               'EO No. 9155',
           ]),
           'answer'       => 'EO No. 713',
           'explanation'  => 'Executive Order No. 713 institutionalized the Presidential Council on Values Formation.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 16
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which province institutionalized the MRP via an executive order in October 2024?',
           'choices'      => json_encode([
               'Cebu',
               'Davao Oriental',
               'Negros Occidental',
               'Ilocos Norte',
           ]),
           'answer'       => 'Davao Oriental',
           'explanation'  => 'Davao Oriental issued EO No. 30 s. 2023 to institutionalize the MRP in the province.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 17
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'The acronym "MRP" stands for?',
           'choices'      => json_encode([
               'Moral Recovery Program',
               'Moral Reform Plan',
               'Moral Resource Project',
               'Moral Rights Policy',
           ]),
           'answer'       => 'Moral Recovery Program',
           'explanation'  => 'MRP is the abbreviation of Moral Recovery Program.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 18
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Which forum launched the "Moral Recovery Program Study Manual for Government Employees"?',
           'choices'      => json_encode([
               'NEFFMA',
               'DepEd',
               'CHED',
               'COMELEC',
           ]),
           'answer'       => 'NEFFMA',
           'explanation'  => 'The Negros Occidental Federation of Farmers Multi-purpose Association (NEFFMA) launched the study manual.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 19
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'Values Education was first institutionalized in schools by which DECS order?',
           'choices'      => json_encode([
               'DECS Order No. 6, s. 1988',
               'DECS Order No. 62, s. 1988',
               'DECS Order No. 770, s. 1992',
               'DECS Order No. 170, s. 1993',
           ]),
           'answer'       => 'DECS Order No. 6, s. 1988',
           'explanation'  => 'DECS Order No. 6 (1988) institutionalized Values Education across all levels of Philippine education.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 7 – Question 20
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 7,
           'question'     => 'The Values Education subject was introduced in the secondary school curriculum in which school year?',
           'choices'      => json_encode([
               '1988–1989',
               '1989–1990',
               '1992–1993',
               '2012–2013',
           ]),
           'answer'       => '1989–1990',
           'explanation'  => 'Values Education was added as a separate subject starting the 1989–1990 secondary school curriculum.',
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
