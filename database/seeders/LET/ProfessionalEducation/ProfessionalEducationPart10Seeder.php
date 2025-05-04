<?php

namespace Database\Seeders\LET\ProfessionalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessionalEducationPart10Seeder extends Seeder
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
       // 181
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'What year was the Magna Carta for Public School Teachers (RA 4670) enacted?',
    'choices'      => json_encode([
        '1966',
        '1972',
        '1982',
        '1990'
    ]),
    'answer'        => '1966',
    'explanation'   => 'RA 4670, the Magna Carta for Public School Teachers, was signed into law in 1966.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 182
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which body regulates the licensure of professional teachers in the Philippines?',
    'choices'      => json_encode([
        'CHED',
        'DepEd',
        'PRC',
        'TESDA'
    ]),
    'answer'        => 'PRC',
    'explanation'   => 'The Professional Regulation Commission (PRC) oversees teacher licensure exams.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 183
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'RA 10968 is also known as the:',
    'choices'      => json_encode([
        'Magna Carta for Teachers',
        'Continuing Professional Development Act',
        'K to 12 Education Act',
        'Governance of Basic Education Act'
    ]),
    'answer'        => 'Continuing Professional Development Act',
    'explanation'   => 'RA 10968 mandates CPD programs for professionals, including teachers.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 184
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which law institutionalized the K to 12 program in the Philippines?',
    'choices'      => json_encode([
        'RA 6728',
        'RA 9155',
        'RA 10931',
        'RA 10533'
    ]),
    'answer'        => 'RA 10533',
    'explanation'   => 'RA 10533, the Enhanced Basic Education Act of 2013, established the K to 12 curriculum.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 185
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'The DepEd Order that standardized grading for basic education is numbered:',
    'choices'      => json_encode([
        'No. 8, s. 2015',
        'No. 31, s. 2012',
        'No. 4, s. 2016',
        'No. 21, s. 2014'
    ]),
    'answer'        => 'No. 8, s. 2015',
    'explanation'   => 'DepEd Order No. 8, s. 2015 details Learner Assessment Systems in the K to 12 basic education.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 186
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which principle is NOT part of the Teacher’s Code of Ethics?',
    'choices'      => json_encode([
        'Integrity',
        'Confidentiality',
        'Competitiveness',
        'Equity'
    ]),
    'answer'        => 'Competitiveness',
    'explanation'   => 'The Code emphasizes integrity, confidentiality, and equity, not competitiveness.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 187
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Under RA 7610 (Child Abuse Law), teachers are required to:',
    'choices'      => json_encode([
        'Report suspected abuse',
        'Administer corporal punishment',
        'Maintain student silence',
        'Share student records publicly'
    ]),
    'answer'        => 'Report suspected abuse',
    'explanation'   => 'RA 7610 mandates reporting of any suspected child abuse or exploitation.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 188
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which Act created the Governance of Basic Education (DepEd) framework?',
    'choices'      => json_encode([
        'RA 6728',
        'RA 9155',
        'RA 8536',
        'RA 10931'
    ]),
    'answer'        => 'RA 9155',
    'explanation'   => 'RA 9155, the Governance of Basic Education Act of 2001, restructured DepEd.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 189
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'An IEP under special education must be reviewed at least:',
    'choices'      => json_encode([
        'Monthly',
        'Annually',
        'Every five years',
        'Every semester'
    ]),
    'answer'        => 'Annually',
    'explanation'   => 'IEPs are typically reviewed and updated once every school year.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 190
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'RA 8536 established which council?',
    'choices'      => json_encode([
        'Professional Regulation Commission',
        'Teacher Education Council',
        'Commission on Higher Education',
        'Technical Education Council'
    ]),
    'answer'        => 'Teacher Education Council',
    'explanation'   => 'RA 8536 created the Teacher Education Council under CHED supervision.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 191
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which document outlines a teacher’s professional growth goals?',
    'choices'      => json_encode([
        'Lesson plan',
        'Professional development plan',
        'Student handbook',
        'Curriculum guide'
    ]),
    'answer'        => 'Professional development plan',
    'explanation'   => 'This plan sets objectives for training, workshops, and career advancement.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 192
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which is the function of the Professional Board of Teaching (PBOT)?',
    'choices'      => json_encode([
        'Develop school policy',
        'Advise the DepEd Secretary',
        'Set licensure exam questions',
        'Fund school programs'
    ]),
    'answer'        => 'Set licensure exam questions',
    'explanation'   => 'PBOT, under PRC, helps formulate teacher licensure exam contents.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 193
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which Act provides free tuition in state universities and colleges?',
    'choices'      => json_encode([
        'RA 6728',
        'RA 10931',
        'RA 7610',
        'RA 10533'
    ]),
    'answer'        => 'RA 10931',
    'explanation'   => 'RA 10931, the Universal Access to Tertiary Education Act, grants free tuition.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 194
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Teacher accountability primarily involves:',
    'choices'      => json_encode([
        'Financial audits',
        'Reporting learning outcomes and professional conduct',
        'School maintenance',
        'Cafeteria management'
    ]),
    'answer'        => 'Reporting learning outcomes and professional conduct',
    'explanation'   => 'Accountability covers both student performance and adherence to ethical standards.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 195
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which tool helps track classroom referrals and behavior incidents?',
    'choices'      => json_encode([
        'Behavior log',
        'Attendance sheet',
        'Lesson plan book',
        'Seating chart'
    ]),
    'answer'        => 'Behavior log',
    'explanation'   => 'Behavior logs record incidents and interventions in a systematic way.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 196
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which DepEd Order covers Child Protection Policy?',
    'choices'      => json_encode([
        'No. 40, s. 2012',
        'No. 12, s. 2015',
        'No. 31, s. 2010',
        'No. 8, s. 2016'
    ]),
    'answer'        => 'No. 40, s. 2012',
    'explanation'   => 'DepEd Order No. 40, s. 2012 outlines policies on child protection.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 197
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which evaluation method involves classroom observation by peers?',
    'choices'      => json_encode([
        'Self-assessment',
        'Peer coaching',
        'Standardized testing',
        'Written exam'
    ]),
    'answer'        => 'Peer coaching',
    'explanation'   => 'Peer coaching includes structured observations and feedback among colleagues.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 198
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which policy ensures learner privacy and data protection?',
    'choices'      => json_encode([
        'FERPA',
        'Data Privacy Act',
        'Freedom of Information Act',
        'Labor Code'
    ]),
    'answer'        => 'Data Privacy Act',
    'explanation'   => 'The Philippine Data Privacy Act of 2012 safeguards personal information, including student records.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 199
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'Which approach encourages teachers to use technology meaningfully?',
    'choices'      => json_encode([
        'TPACK',
        'Bloom’s taxonomy',
        'Classical conditioning',
        'Zone of proximal development'
    ]),
    'answer'        => 'TPACK',
    'explanation'   => 'TPACK framework integrates technology, pedagogy, and content knowledge.',
    'created_at'    => $now,
    'updated_at'    => $now,
];

// 200
$batch[] = [
    'subject_id'   => 6,
    'part'         => 10,
    'question'     => 'What is the role of a Master Teacher in DepEd?',
    'choices'      => json_encode([
        'Distribute textbooks',
        'Lead curriculum implementation and mentor colleagues',
        'Manage school finances',
        'Oversee cafeteria operations'
    ]),
    'answer'        => 'Lead curriculum implementation and mentor colleagues',
    'explanation'   => 'Master Teachers provide instructional leadership and professional support to peers.',
    'created_at'    => $now,
    'updated_at'    => $now,
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}
