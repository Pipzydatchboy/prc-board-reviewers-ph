<?php

namespace Database\Seeders\FOE\FireInvestigation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireInvestigationPart10Seeder extends Seeder
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

$batch = [
    //1
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which section of NFPA 921 covers scenario reconstruction?',
        'choices'     => json_encode([
            'Chapter 24',
            'Chapter 10',
            'Chapter 15',
            'Chapter 5',
        ]),
        'answer'      => 'Chapter 24',
        'explanation' => 'Chapter 24 of NFPA 921 details methods for fire and explosion reconstruction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'What is the purpose of a “travel path analysis”?',
        'choices'     => json_encode([
            'Determine movement of heat and smoke',
            'Map witness routes',
            'Locate hydrants',
            'Chart egress distances',
        ]),
        'answer'      => 'Determine movement of heat and smoke',
        'explanation' => 'Travel path analysis examines the route of heat and smoke flow within a structure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which diagram best conveys three-dimensional evidence relationships?',
        'choices'     => json_encode([
            'Axonometric sketch',
            'Plan view only',
            'Section view only',
            'Bar graph',
        ]),
        'answer'      => 'Axonometric sketch',
        'explanation' => 'Axonometric sketches present 3D spatial relationships without perspective distortion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which tool can recreate fire spread in computer simulations?',
        'choices'     => json_encode([
            'Fire Dynamics Simulator (FDS)',
            'GC-MS software',
            'pH analysis program',
            'Depth gauge app',
        ]),
        'answer'      => 'Fire Dynamics Simulator (FDS)',
        'explanation' => 'FDS models fire behavior and smoke movement in three dimensions over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'What metric indicates fire intensity at origin?',
        'choices'     => json_encode([
            'Char depth per unit time',
            'Smoke thickness only',
            'Number of patterns',
            'Photograph count',
        ]),
        'answer'      => 'Char depth per unit time',
        'explanation' => 'Measuring depth of char over documented time provides an estimate of heat release rate.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which section of the report addresses limitations and assumptions?',
        'choices'     => json_encode([
            'Scope and limitations',
            'Evidence log',
            'Sketch section',
            'Introduction',
        ]),
        'answer'      => 'Scope and limitations',
        'explanation' => 'The scope and limitations section outlines constraints and assumptions affecting conclusions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which chain-of-custody entry is REQUIRED when evidence leaves the investigator’s possession?',
        'choices'     => json_encode([
            'Recipient signature and time',
            'Sketch reference',
            'Interview summary',
            'Photograph number',
        ]),
        'answer'      => 'Recipient signature and time',
        'explanation' => 'Every transfer must be signed by the recipient with date and time to maintain custody integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'What is the ideal order for presenting evidence in a final report?',
        'choices'     => json_encode([
            'Scene documentation → analysis → conclusions',
            'Conclusions → scene documentation → analysis',
            'Analysis only → scene documentation',
            'Conclusions only',
        ]),
        'answer'      => 'Scene documentation → analysis → conclusions',
        'explanation' => 'Reports should flow from documentation, through analysis, to reasoned conclusions logically.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which legal doctrine ensures expert methods are scientifically valid?',
        'choices'     => json_encode([
            'Daubert standard',
            'Best evidence rule',
            'Fruit of the poisonous tree',
            'Exclusionary rule',
        ]),
        'answer'      => 'Daubert standard',
        'explanation' => 'The Daubert standard in many jurisdictions requires methodologies be peer-reviewed and reliable.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which entry in the evidence log notes packaging condition?',
        'choices'     => json_encode([
            'Seal number and condition',
            'Sketch number',
            'Photograph title',
            'Witness name',
        ]),
        'answer'      => 'Seal number and condition',
        'explanation' => 'Recording seal numbers and their condition ensures tamper evidence is documented clearly.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which section of NFPA 921 discusses witness interviewing principles?',
        'choices'     => json_encode([
            'Chapter 22',
            'Chapter 12',
            'Chapter 5',
            'Chapter 30',
        ]),
        'answer'      => 'Chapter 22',
        'explanation' => 'Chapter 22 of NFPA 921 covers the collection and evaluation of witness statements.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which report appendage includes full chromatograms?',
        'choices'     => json_encode([
            'Laboratory data appendix',
            'Sketch appendix',
            'Witness list appendix',
            'Weather log appendix',
        ]),
        'answer'      => 'Laboratory data appendix',
        'explanation' => 'Full GC-MS chromatograms are included in the lab data appendix for transparency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which metric quantifies uncertainty in temperature estimates?',
        'choices'     => json_encode([
            '± margin of error',
            'Char depth only',
            'Pattern count',
            'Photograph quantity',
        ]),
        'answer'      => '± margin of error',
        'explanation' => 'Reporting a margin of error acknowledges the range within which true temperatures likely fall.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which record must the investigator preserve permanently?',
        'choices'     => json_encode([
            'Final investigative report',
            'Photocopy of weather log',
            'Disposable gloves',
            'Single photograph only',
        ]),
        'answer'      => 'Final investigative report',
        'explanation' => 'The final report is the official record of findings and must be retained indefinitely.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which section of a report discusses alternative hypotheses?',
        'choices'     => json_encode([
            'Discussion and interpretation',
            'Evidence log',
            'Sketches',
            'Appendix',
        ]),
        'answer'      => 'Discussion and interpretation',
        'explanation' => 'This section explores other plausible explanations and why they were accepted or rejected.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which principle requires investigators to avoid hindsight bias?',
        'choices'     => json_encode([
            'Scientific method',
            'Best evidence rule',
            'Frye standard',
            'Daubert standard',
        ]),
        'answer'      => 'Scientific method',
        'explanation' => 'Adherence to systematic hypothesis testing prevents conclusions influenced by known outcomes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which diagram type is used to illustrate heat release rate curves?',
        'choices'     => json_encode([
            'Line graph',
            'Photograph montage',
            'Pie chart',
            'Bar chart',
        ]),
        'answer'      => 'Line graph',
        'explanation' => 'Line graphs effectively show changes in heat release rate over time for comparison.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which factor MOST affects accuracy of computer fire models?',
        'choices'     => json_encode([
            'Quality of input boundary conditions',
            'Number of users',
            'Type of camera used',
            'Color of sketches',
        ]),
        'answer'      => 'Quality of input boundary conditions',
        'explanation' => 'Accurate boundary conditions (geometry, fire load, openings) are critical for reliable simulations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which practice ensures validation of investigative methods?',
        'choices'     => json_encode([
            'Peer-reviewed publication of methodology',
            'Oral report only',
            'Skipping methodology discussion',
            'Using untested shortcuts',
        ]),
        'answer'      => 'Peer-reviewed publication of methodology',
        'explanation' => 'Publishing methods allows scrutiny and establishes credibility through peer review.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 44,
        'part'        => 10,
        'question'    => 'Which element in a report defines the investigator’s credentials?',
        'choices'     => json_encode([
            'Qualifications and certifications section',
            'Evidence log appendix',
            'Sketch legends',
            'Weather log',
        ]),
        'answer'      => 'Qualifications and certifications section',
        'explanation' => 'A credentials section lists training, certifications, and experience of the investigator.',
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
