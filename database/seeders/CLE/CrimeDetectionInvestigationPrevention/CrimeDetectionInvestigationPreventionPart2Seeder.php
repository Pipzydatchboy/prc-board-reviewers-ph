<?php

namespace Database\Seeders\CLE\CrimeDetectionInvestigationPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CrimeDetectionInvestigationPreventionPart2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];

//1
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which Republic Act revised the definition of rape and its penalties in the Philippines?',
    'choices'     => json_encode([
        'RA 8353',
        'RA 9165',
        'RA 10175',
        'RA 7610',
    ]),
    'answer'      => 'RA 8353',
    'explanation' => 'RA 8353, the Anti-Rape Law of 1997, amended the Revised Penal Code’s definitions and penalties for rape.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Under Article 246 of the Revised Penal Code, what crime involves killing a relative by consanguinity?',
    'choices'     => json_encode([
        'Parricide',
        'Murder',
        'Homicide',
        'Infanticide',
    ]),
    'answer'      => 'Parricide',
    'explanation' => 'Parricide is the killing of a relative by consanguinity under RPC Article 246.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which article of the RPC defines murder and lists treachery as an aggravating circumstance?',
    'choices'     => json_encode([
        'Article 248',
        'Article 249',
        'Article 265',
        'Article 277',
    ]),
    'answer'      => 'Article 248',
    'explanation' => 'RPC Article 248 defines murder and includes treachery as one of its qualifying circumstances.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'What is the classification of a wound with smooth, clean-cut edges, longer than it is deep?',
    'choices'     => json_encode([
        'Incised wound',
        'Puncture wound',
        'Laceration',
        'Contusion',
    ]),
    'answer'      => 'Incised wound',
    'explanation' => 'Incised wounds are produced by sharp-edged instruments and have smooth, clean-cut edges.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which medico-legal sign indicates blood extravasation into tissues from blunt trauma?',
    'choices'     => json_encode([
        'Contusion',
        'Abrasion',
        'Incision',
        'Puncture',
    ]),
    'answer'      => 'Contusion',
    'explanation' => 'Contusions (bruises) result from blood vessels rupturing under the skin after blunt impact.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which post-mortem change refers to hypostasis of blood settling in dependent parts?',
    'choices'     => json_encode([
        'Livor mortis',
        'Rigor mortis',
        'Algor mortis',
        'Adipocere formation',
    ]),
    'answer'      => 'Livor mortis',
    'explanation' => 'Livor mortis is the purplish discoloration from blood pooling in dependent areas after death.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which principle distinguishes antemortem wounds from postmortem injuries?',
    'choices'     => json_encode([
        'Vital reaction',
        'Chain of custody',
        'Exclusionary rule',
        'Presumption of innocence',
    ]),
    'answer'      => 'Vital reaction',
    'explanation' => 'Vital reaction denotes physiological responses (e.g., inflammation) present only in antemortem wounds.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Under the Anti-Wiretapping Law, which requirement is necessary before electronic surveillance?',
    'choices'     => json_encode([
        'Court order',
        'Prosecutor approval',
        'Suspect confession',
        'Consent of witness',
    ]),
    'answer'      => 'Court order',
    'explanation' => 'Republic Act 4200 mandates a court order before intercepting communications.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which forensic test uses luminol to detect trace quantities of blood at a scene?',
    'choices'     => json_encode([
        'Luminol test',
        'Phenolphthalein test',
        'Benzidine test',
        'Kastle-Meyer test',
    ]),
    'answer'      => 'Luminol test',
    'explanation' => 'Luminol chemiluminesces in the presence of blood iron, revealing hidden stains.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which instrument is most appropriate for collecting trace hairs at a crime scene?',
    'choices'     => json_encode([
        'Tweezers',
        'Scissors',
        'Scalpel',
        'Force pump',
    ]),
    'answer'      => 'Tweezers',
    'explanation' => 'Tweezers allow precise collection of delicate trace evidence like hairs.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which classification refers to a wound deeper than it is long created by a sharp object?',
    'choices'     => json_encode([
        'Puncture wound',
        'Incised wound',
        'Avulsion',
        'Contusion',
    ]),
    'answer'      => 'Puncture wound',
    'explanation' => 'Puncture wounds are produced by pointed objects, depth exceeding length.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'What is the medico-legal term for the stiffening of muscles after death?',
    'choices'     => json_encode([
        'Rigor mortis',
        'Livor mortis',
        'Algor mortis',
        'Putrefaction',
    ]),
    'answer'      => 'Rigor mortis',
    'explanation' => 'Rigor mortis sets in 2–6 hours postmortem, indicating early post-death interval.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which category of homicide under RPC lacks the qualifying circumstance of treachery?',
    'choices'     => json_encode([
        'Manslaughter',
        'Murder',
        'Parricide',
        'Infanticide',
    ]),
    'answer'      => 'Manslaughter',
    'explanation' => 'Manslaughter (RPC Art. 249) is voluntary homicide without qualifying circumstances like treachery.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which medico-legal test distinguishes human blood from animal blood?',
    'choices'     => json_encode([
        'Precipitin test',
        'Phenolphthalein test',
        'Kastle-Meyer test',
        'Luminol test',
    ]),
    'answer'      => 'Precipitin test',
    'explanation' => 'The precipitin test uses human antiserum to confirm human origin of blood.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which term refers to the mapping of anatomical injuries on a diagram during autopsy?',
    'choices'     => json_encode([
        'Injury charting',
        'Photogrammetry',
        'Forensic odontology',
        'Evidence tagging',
    ]),
    'answer'      => 'Injury charting',
    'explanation' => 'Injury charting documents wound locations and characteristics on body diagrams.',
    'created at'  => $now,
    'updated at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which forensic pathology term describes blood aspiration into the airways and lungs?',
    'choices'     => json_encode([
        'Pulmonary hemorrhage',
        'Cerebral edema',
        'Subdural hematoma',
        'Pericardial tamponade',
    ]),
    'answer'      => 'Pulmonary hemorrhage',
    'explanation' => 'Pulmonary hemorrhage involves bleeding into lung tissue and airways, common in chest trauma.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which standardized form is used to record medico-legal findings after sexual assault?',
    'choices'     => json_encode([
        'Medical-legal report form',
        'Incident blotter',
        'Affidavit of complaint',
        'Chain of custody form',
    ]),
    'answer'      => 'Medical-legal report form',
    'explanation' => 'Medical-legal report forms document injuries and specimens collected in sexual assault cases.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which vital sign is assessed to help approximate time since death using body temperature?',
    'choices'     => json_encode([
        'Algor mortis',
        'Rigor mortis',
        'Livor mortis',
        'Decomposition odor',
    ]),
    'answer'      => 'Algor mortis',
    'explanation' => 'Algor mortis is the cooling of the body postmortem, used to estimate time of death.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'In homicide investigation, which concept refers to the sequence of events leading to death?',
    'choices'     => json_encode([
        'Manner of death',
        'Cause of death',
        'Mechanism of death',
        'Time of death',
    ]),
    'answer'      => 'Mechanism of death',
    'explanation' => 'Mechanism of death describes the physiological derangement (e.g., hemorrhage) causing death.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 23,
    'part'        => 2,
    'question'    => 'Which forensic tool is essential for microscopic examination of wound edges?',
    'choices'     => json_encode([
        'Stereomicroscope',
        'FTIR spectrometer',
        'Gas chromatograph',
        'UV lamp',
    ]),
    'answer'      => 'Stereomicroscope',
    'explanation' => 'Stereomicroscopes allow three-dimensional inspection of wound margins at low magnification.',
    'created_at'  => $now,
    'updated_at'  => $now,
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
