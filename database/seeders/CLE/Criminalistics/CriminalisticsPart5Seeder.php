<?php

namespace Database\Seeders\CLE\Criminalistics;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalisticsPart5Seeder extends Seeder
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
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which phase of the polygraph examination involves explaining procedures and obtaining consent from the examinee?',
    'choices'     => json_encode([
        'Pre-test interview',
        'Acquisition phase',
        'Data analysis phase',
        'Post-test interview',
    ]),
    'answer'      => 'Pre-test interview',
    'explanation' => 'The pre-test interview establishes rapport, reviews relevant questions, and secures informed consent.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'In polygraph testing, which type of question is designed to provoke an emotional response but not related to the investigation?',
    'choices'     => json_encode([
        'Irrelevant question',
        'Relevant question',
        'Control question',
        'Comparison question',
    ]),
    'answer'      => 'Irrelevant question',
    'explanation' => 'Irrelevant questions measure baseline physiological responses unconnected to the issue under investigation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which control question technique compares reactions to known-lie questions against relevant questions?',
    'choices'     => json_encode([
        'Control question test (CQT)',
        'Guilty knowledge test (GKT)',
        'Peak of tension test',
        'Relevant comparison test',
    ]),
    'answer'      => 'Control question test (CQT)',
    'explanation' => 'CQT uses control questions to elicit stronger responses from deceptive individuals than from truthful ones.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which physiological measure recorded by the polygraph indicates changes in blood volume under the skin?',
    'choices'     => json_encode([
        'Plethysmograph',
        'Galvanic skin response',
        'Pneumograph',
        'Cardiograph',
    ]),
    'answer'      => 'Plethysmograph',
    'explanation' => 'The plethysmograph measures blood volume changes, typically via a finger cuff, indicating cardiovascular reactions.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which device in a polygraph records skin conductivity as an indicator of sweat gland activity?',
    'choices'     => json_encode([
        'Galvanic skin response sensor',
        'Pneumograph',
        'Cardiograph',
        'Electroencephalograph',
    ]),
    'answer'      => 'Galvanic skin response sensor',
    'explanation' => 'GSR sensors detect changes in electrical conductance due to perspiration, reflecting emotional arousal.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which test format requires the examinee to conceal knowledge of a specific detail of a crime?',
    'choices'     => json_encode([
        'Guilty knowledge test (GKT)',
        'Control question test (CQT)',
        'Peak of tension test',
        'Relevant comparison test',
    ]),
    'answer'      => 'Guilty knowledge test (GKT)',
    'explanation' => 'GKT assesses recognition of crime-relevant items by measuring physiological responses to multiple-choice stimuli.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which factor can decrease the accuracy of polygraph examinations by allowing subjects to mask physiological responses?',
    'choices'     => json_encode([
        'Countermeasures',
        'Good rapport',
        'Standardized questions',
        'Proper calibration',
    ]),
    'answer'      => 'Countermeasures',
    'explanation' => 'Countermeasures include physical or mental tactics employed by subjects to alter their physiological responses.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which chart component plots heart rate, respiration, and skin conductance simultaneously?',
    'choices'     => json_encode([
        'Polygraph chart',
        'Physiogram',
        'Polygram',
        'Psychograph',
    ]),
    'answer'      => 'Polygraph chart',
    'explanation' => 'The polygraph chart records multiple channels of physiological data concurrently for analysis.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which legal principle requires polygraph examiners to maintain detailed written records of each test session?',
    'choices'     => json_encode([
        'Due process',
        'Chain of custody',
        'Duty to document',
        'Right to privacy',
    ]),
    'answer'      => 'Duty to document',
    'explanation' => 'Examiners must document test procedures and results to uphold transparency and accountability.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which question type is designed to be emotionally neutral and unrelated to the investigation?',
    'choices'     => json_encode([
        'Irrelevant questions',
        'Relevant questions',
        'Control questions',
        'Comparison questions',
    ]),
    'answer'      => 'Irrelevant questions',
    'explanation' => 'Irrelevant questions serve as a baseline by eliciting neutral responses unrelated to the issue under investigation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which physiological channel measures chest and abdominal movements to record respiration?',
    'choices'     => json_encode([
        'Pneumograph',
        'Cardiograph',
        'Plethysmograph',
        'Galvanograph',
    ]),
    'answer'      => 'Pneumograph',
    'explanation' => 'Pneumographs use pneumatic tubes to capture breathing patterns during polygraph tests.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which post-test procedure allows the subject to clarify responses and provides context for chart interpretation?',
    'choices'     => json_encode([
        'Post-test interview',
        'Pre-test briefing',
        'Calibration check',
        'Control question review',
    ]),
    'answer'      => 'Post-test interview',
    'explanation' => 'During the post-test interview, subjects discuss their reactions, aiding examiner interpretation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which variable factor in polygraph testing must be kept consistent to ensure comparability of charts?',
    'choices'     => json_encode([
        'Question wording and order',
        'Room temperature',
        'Examiner attire',
        'Time of day',
    ]),
    'answer'      => 'Question wording and order',
    'explanation' => 'Standardizing question phrasing and sequence reduces variability in physiological responses.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which term describes the technique of asking a question in a non-threatening and conversational manner to minimize anxiety?',
    'choices'     => json_encode([
        'Neutral questioning',
        'Stress questioning',
        'Confrontational questioning',
        'Rapid-fire questioning',
    ]),
    'answer'      => 'Neutral questioning',
    'explanation' => 'Neutral questioning aims to maintain a calm tone to differentiate truthful from deceptive responses.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which environmental factor can affect polygraph readings by altering electrodermal responses?',
    'choices'     => json_encode([
        'Room temperature variations',
        'Question complexity',
        'Subject height',
        'Examiner gender',
    ]),
    'answer'      => 'Room temperature variations',
    'explanation' => 'Fluctuations in room temperature can influence skin conductance and baseline responses.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which scoring method quantifies the magnitude of physiological change between comparison and relevant questions?',
    'choices'     => json_encode([
        'Numerical scoring',
        'Qualitative scoring',
        'Visual assessment',
        'Hybrid scoring',
    ]),
    'answer'      => 'Numerical scoring',
    'explanation' => 'Numerical scoring assigns values to response amplitudes for statistical comparison across question types.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which calibration check is performed to ensure polygraph transducers provide accurate baseline readings?',
    'choices'     => json_encode([
        'Zero-offset calibration',
        'Range verification',
        'Signal inversion test',
        'Dynamic range test',
    ]),
    'answer'      => 'Zero-offset calibration',
    'explanation' => 'Zero-offset calibration ensures sensors read zero volts when no physiological signal is present.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which psychological theory underlies the assumption that deception produces heightened physiological arousal?',
    'choices'     => json_encode([
        'Arousal theory',
        'Inhibition theory',
        'Control theory',
        'Cognitive load theory',
    ]),
    'answer'      => 'Arousal theory',
    'explanation' => 'Arousal theory posits that guilt or stress from deception increases physiological responses measurable by a polygraph.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which challenge to polygraph admissibility concerns the examiner\'s potential subjective influence on test outcomes?',
    'choices'     => json_encode([
        'Examiner bias',
        'Equipment malfunction',
        'Countermeasures',
        'Sample contamination',
    ]),
    'answer'      => 'Examiner bias',
    'explanation' => 'Examiner expectations or interpretations can influence scoring and thus the perceived validity of results.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 24,
    'part'        => 5,
    'question'    => 'Which professional standard provides ethical guidelines and performance criteria for polygraph examiners in the U.S.?',
    'choices'     => json_encode([
        'American Polygraph Association Standards',
        'APA Code of Ethics',
        'DOJ Polygraph Procedures',
        'ISO 9001 Quality Management',
    ]),
    'answer'      => 'American Polygraph Association Standards',
    'explanation' => 'The APA Standards outline examiner qualifications, test protocols, and ethical conduct criteria.',
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
