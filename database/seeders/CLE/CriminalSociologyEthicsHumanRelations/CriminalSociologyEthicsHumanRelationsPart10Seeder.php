<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart10Seeder extends Seeder
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

// 1
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which professional value emphasizes serving the community above personal interests?',
  'choices'     => json_encode([
    'Public service',
    'Neutrality',
    'Integrity',
    'Accountability',
  ]),
  'answer'      => 'Public service',
  'explanation' => 'Public service requires placing community welfare before personal gain.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which code mandates respect for human dignity in criminology practice?',
  'choices'     => json_encode([
    'Criminologist’s Oath',
    'PNP Code of Conduct',
    'Nelson Mandela Rules',
    'Tokyo Rules',
  ]),
  'answer'      => 'Criminologist’s Oath',
  'explanation' => 'The Oath pledges respect for human rights and dignity in all professional activities.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which principle requires that research findings be shared honestly without fabrication?',
  'choices'     => json_encode([
    'Integrity',
    'Transparency',
    'Beneficence',
    'Confidentiality',
  ]),
  'answer'      => 'Integrity',
  'explanation' => 'Integrity in research means reporting results truthfully and accurately.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which ethical guideline protects participant privacy in studies?',
  'choices'     => json_encode([
    'Confidentiality',
    'Justice',
    'Autonomy',
    'Transparency',
  ]),
  'answer'      => 'Confidentiality',
  'explanation' => 'Confidentiality ensures data is only used for agreed purposes and identities are protected.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which statistical measure indicates data spread around the mean?',
  'choices'     => json_encode([
    'Standard deviation',
    'Mean',
    'Median',
    'Mode',
  ]),
  'answer'      => 'Standard deviation',
  'explanation' => 'Standard deviation quantifies the average distance of values from the mean.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which research design examines residents\' views at multiple time points?',
  'choices'     => json_encode([
    'Longitudinal study',
    'Cross-sectional study',
    'Case study',
    'Ethnography',
  ]),
  'answer'      => 'Longitudinal study',
  'explanation' => 'Longitudinal designs track the same subjects over time to observe changes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which criminological concept refers to unintentional crime outcomes due to strict controls?',
  'choices'     => json_encode([
    'Backfire effect',
    'Deterrence',
    'Displacement',
    'Recidivism',
  ]),
  'answer'      => 'Backfire effect',
  'explanation' => 'Backfire effect occurs when crime measures inadvertently increase crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which term describes when crime shifts to different targets instead of locations?',
  'choices'     => json_encode([
    'Target displacement',
    'Spatial displacement',
    'Temporal displacement',
    'Method displacement',
  ]),
  'answer'      => 'Target displacement',
  'explanation' => 'Target displacement involves offenders choosing new victims or targets.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which ethical principle focuses on fairness in distribution of research benefits?',
  'choices'     => json_encode([
    'Justice',
    'Beneficence',
    'Non-maleficence',
    'Autonomy',
  ]),
  'answer'      => 'Justice',
  'explanation' => 'Justice requires equitable selection and treatment of research participants.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'What does CSI stand for in crime analysis?',
  'choices'     => json_encode([
    'Crime Severity Index',
    'Crime Scene Investigation',
    'Case Study Index',
    'Community Safety Initiative',
  ]),
  'answer'      => 'Crime Severity Index',
  'explanation' => 'CSI quantifies crime seriousness by applying weights to different offenses.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which theory suggests crime occurs when social norms break down?',
  'choices'     => json_encode([
    'Anomie theory',
    'Labeling theory',
    'Routine activity theory',
    'Conflict theory',
  ]),
  'answer'      => 'Anomie theory',
  'explanation' => 'Durkheim’s anomie theory links normlessness to increased deviance.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which approach to policing emphasizes collaboration between officers and community members?',
  'choices'     => json_encode([
    'Community policing',
    'Hotspot policing',
    'Predictive policing',
    'Zero tolerance policing',
  ]),
  'answer'      => 'Community policing',
  'explanation' => 'Community policing fosters trust and joint problem-solving with residents.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which statistical test compares means of more than two groups?',
  'choices'     => json_encode([
    'ANOVA',
    'Chi-square',
    'T-test',
    'Correlation',
  ]),
  'answer'      => 'ANOVA',
  'explanation' => 'ANOVA determines whether there are significant differences between group means.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which measure indicates the central value of a set of numbers?',
  'choices'     => json_encode([
    'Median',
    'Standard deviation',
    'Variance',
    'Mode',
  ]),
  'answer'      => 'Median',
  'explanation' => 'The median is the middle value when data are ordered sequentially.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which software is commonly used for qualitative data analysis in criminology?',
  'choices'     => json_encode([
    'NVivo',
    'SPSS',
    'Excel',
    'Tableau',
  ]),
  'answer'      => 'NVivo',
  'explanation' => 'NVivo supports coding and thematic analysis of qualitative data.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which concept describes the act of ensuring research findings can be verified by others?',
  'choices'     => json_encode([
    'Replicability',
    'Reliability',
    'Validity',
    'Precision',
  ]),
  'answer'      => 'Replicability',
  'explanation' => 'Replicability allows independent researchers to reproduce study results under similar conditions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which ethical requirement ensures participants can withdraw from a study at any time?',
  'choices'     => json_encode([
    'Voluntary participation',
    'Informed consent',
    'Confidentiality',
    'Justice',
  ]),
  'answer'      => 'Voluntary participation',
  'explanation' => 'Voluntary participation means individuals join and leave research freely without penalty.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which index tracks the proportion of crimes solved by law enforcement?',
  'choices'     => json_encode([
    'Clearance rate',
    'Crime rate',
    'Recidivism rate',
    'Crime severity index',
  ]),
  'answer'      => 'Clearance rate',
  'explanation' => 'Clearance rate indicates the percentage of reported crimes leading to arrest or charge.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which forensic tool analyzes fingerprint uniqueness for identification?',
  'choices'     => json_encode([
    'AFIS',
    'GIS',
    'SPSS',
    'GIS',
  ]),
  'answer'      => 'AFIS',
  'explanation' => 'Automated Fingerprint Identification Systems (AFIS) compare fingerprints for matches.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 10,
  'question'    => 'Which principle requires that force used by law enforcement be necessary and proportionate?',
  'choices'     => json_encode([
    'Principle of proportionality',
    'Principle of legality',
    'Principle of command',
    'Principle of neutrality',
  ]),
  'answer'      => 'Principle of proportionality',
  'explanation' => 'Proportionality ensures force is limited to what is necessary to address a threat.',
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
