<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart8Seeder extends Seeder
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
  'part'        => 8,
  'question'    => 'Which theory argues that individuals internalize societal norms and values to regulate their behavior?',
  'choices'     => json_encode([
    'Social control theory',
    'Strain theory',
    'Labeling theory',
    'Biological positivism',
  ]),
  'answer'      => 'Social control theory',
  'explanation' => 'Social control theory posits that strong bonds to society and internalized norms inhibit deviant behavior.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which ethical principle holds that actions are right if they promote the greatest happiness for the greatest number?',
  'choices'     => json_encode([
    'Utilitarianism',
    'Deontology',
    'Virtue ethics',
    'Retributive justice',
  ]),
  'answer'      => 'Utilitarianism',
  'explanation' => 'Utilitarian ethics evaluate actions based on their outcomes and overall utility or happiness generated.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'In crime data analysis, which visualization best shows the distribution and identifies outliers in a continuous variable?',
  'choices'     => json_encode([
    'Box plot',
    'Histogram',
    'Pie chart',
    'Line graph',
  ]),
  'answer'      => 'Box plot',
  'explanation' => 'Box plots depict median, quartiles, and outliers for a dataset, making them ideal for distribution analysis.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which sampling technique divides the population into subgroups and randomly selects from each to ensure representation?',
  'choices'     => json_encode([
    'Stratified random sampling',
    'Cluster sampling',
    'Snowball sampling',
    'Convenience sampling',
  ]),
  'answer'      => 'Stratified random sampling',
  'explanation' => 'Stratified sampling ensures each subgroup is proportionally represented in the sample.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which reliability coefficient assesses internal consistency of a scale?',
  'choices'     => json_encode([
    'Cronbach’s alpha',
    'Pearson’s r',
    'ANOVA F',
    'Kappa statistic',
  ]),
  'answer'      => 'Cronbach’s alpha',
  'explanation' => 'Cronbach’s alpha measures how closely related a set of items are as a group, indicating internal consistency.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which ethical theory emphasizes duties and rules rather than consequences?',
  'choices'     => json_encode([
    'Deontology',
    'Utilitarianism',
    'Virtue ethics',
    'Situational ethics',
  ]),
  'answer'      => 'Deontology',
  'explanation' => 'Deontological ethics focus on adherence to moral rules or duties regardless of outcomes.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which concept describes the breakdown or absence of social norms leading to deviance?',
  'choices'     => json_encode([
    'Anomie',
    'Conformity',
    'Labeling',
    'Socialization',
  ]),
  'answer'      => 'Anomie',
  'explanation' => 'Anomie, as described by Durkheim, refers to normlessness or the breakdown of social standards.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which approach to punishment focuses on repairing harm and restoring relationships?',
  'choices'     => json_encode([
    'Restorative justice',
    'Retributive justice',
    'Deterrence',
    'Incapacitation',
  ]),
  'answer'      => 'Restorative justice',
  'explanation' => 'Restorative justice engages victims and offenders in dialogue to heal harm and reintegrate parties.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which stage of the research process involves developing a testable prediction based on theory?',
  'choices'     => json_encode([
    'Hypothesis formulation',
    'Data collection',
    'Data analysis',
    'Literature review',
  ]),
  'answer'      => 'Hypothesis formulation',
  'explanation' => 'Hypotheses are specific, testable statements derived from theoretical frameworks.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which criminological perspective views crime as a natural response to societal inequalities?',
  'choices'     => json_encode([
    'Conflict theory',
    'Routine activity theory',
    'Strain theory',
    'Social bond theory',
  ]),
  'answer'      => 'Conflict theory',
  'explanation' => 'Conflict theory sees crime emerging from power struggles and economic inequalities in society.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which visualization is best for showing trends in crime rate over time?',
  'choices'     => json_encode([
    'Line graph',
    'Bar chart',
    'Pie chart',
    'Scatter plot',
  ]),
  'answer'      => 'Line graph',
  'explanation' => 'Line graphs illustrate continuous change and trends across time periods.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which measure of central tendency is least affected by extreme values?',
  'choices'     => json_encode([
    'Median',
    'Mean',
    'Mode',
    'Range',
  ]),
  'answer'      => 'Median',
  'explanation' => 'The median represents the middle value and is robust to outliers in the data.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which sampling bias arises when participants volunteer rather than being randomly selected?',
  'choices'     => json_encode([
    'Self-selection bias',
    'Sampling frame bias',
    'Nonresponse bias',
    'Measurement bias',
  ]),
  'answer'      => 'Self-selection bias',
  'explanation' => 'Voluntary participation can lead to unrepresentative samples if certain types are more likely to volunteer.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which statistical test evaluates whether observed frequencies differ from expected frequencies?',
  'choices'     => json_encode([
    'Chi-square test',
    'Independent t-test',
    'ANOVA',
    'Correlation test',
  ]),
  'answer'      => 'Chi-square test',
  'explanation' => 'Chi-square tests assess differences between observed and expected categorical distributions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which research design follows the same subjects over multiple time points?',
  'choices'     => json_encode([
    'Longitudinal study',
    'Cross-sectional study',
    'Case-control study',
    'Ethnography',
  ]),
  'answer'      => 'Longitudinal study',
  'explanation' => 'Longitudinal designs track changes within the same sample over time.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which ethical principle requires avoiding harm to research participants?',
  'choices'     => json_encode([
    'Non-maleficence',
    'Beneficence',
    'Autonomy',
    'Justice',
  ]),
  'answer'      => 'Non-maleficence',
  'explanation' => 'Non-maleficence obligates researchers to prevent or minimize harm to participants.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which theory posits that crime results when individuals lack legitimate means to achieve societal goals?',
  'choices'     => json_encode([
    'Strain theory',
    'Labeling theory',
    'Routine activity theory',
    'Conflict theory',
  ]),
  'answer'      => 'Strain theory',
  'explanation' => 'Merton’s strain theory links deviance to the gap between goals and means.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which method involves deep immersion in a social setting to gather qualitative data?',
  'choices'     => json_encode([
    'Ethnography',
    'Survey',
    'Experiment',
    'Content analysis',
  ]),
  'answer'      => 'Ethnography',
  'explanation' => 'Ethnography uses prolonged fieldwork to understand cultural and social contexts.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which crime typology categorizes offenses into violent, property, and public order?',
  'choices'     => json_encode([
    'Offense classification',
    'Victim classification',
    'Offender profiling',
    'Penological classification',
  ]),
  'answer'      => 'Offense classification',
  'explanation' => 'Offense classification organizes crimes by their nature and impact on victims and society.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 8,
  'question'    => 'Which index weights crimes by seriousness to produce a composite measure of crime severity?',
  'choices'     => json_encode([
    'Crime severity index',
    'Crime rate',
    'Clearance rate',
    'Recidivism rate',
  ]),
  'answer'      => 'Crime severity index',
  'explanation' => 'A crime severity index applies weights reflecting relative seriousness to different offenses.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
