<?php

namespace Database\Seeders\CLE\CriminalSociologyEthicsHumanRelations;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CriminalSociologyEthicsHumanRelationsPart1Seeder extends Seeder
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
  'part'        => 1,
  'question'    => 'Which definition of crime emphasizes violations of societal norms irrespective of legal codification?',
  'choices'     => json_encode([
    'Sociological definition',
    'Legal definition',
    'Psychological definition',
    'Statutory definition',
  ]),
  'answer'      => 'Sociological definition',
  'explanation' => 'The sociological definition views crime as any behavior that breaches social norms, not just written laws.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'A crime that is wrong in itself, such as murder, is known as:',
  'choices'     => json_encode([
    'Mala in se',
    'Mala prohibita',
    'Felony',
    'Misdemeanor',
  ]),
  'answer'      => 'Mala in se',
  'explanation' => 'Mala in se offenses are inherently evil or wrong, regardless of legal statute.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Classical criminology is based on the assumption that humans:',
  'choices'     => json_encode([
    'Exercise free will',
    'Are shaped by biology',
    'Are driven by unconscious motives',
    'Learn behavior from others',
  ]),
  'answer'      => 'Exercise free will',
  'explanation' => 'Classical theory holds that offenders choose to commit crimes after rational calculation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Which theory attributes crime to genetic and physiological factors?',
  'choices'     => json_encode([
    'Biological positivism',
    'Social disorganization',
    'Routine activity',
    'Strain theory',
  ]),
  'answer'      => 'Biological positivism',
  'explanation' => 'Biological positivism explores inherited traits and bio‐chemical factors influencing criminality.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Social disorganization theory links crime rates to:',
  'choices'     => json_encode([
    'Community structural breakdown',
    'Individual free will',
    'Genetic predisposition',
    'Psychoanalytic conflict',
  ]),
  'answer'      => 'Community structural breakdown',
  'explanation' => 'This theory posits that weak social institutions in neighborhoods lead to higher crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Strain theory suggests crime results when individuals:',
  'choices'     => json_encode([
    'Experience blocked opportunities',
    'Have biological abnormalities',
    'Seek routine activities',
    'Are labeled deviant',
  ]),
  'answer'      => 'Experience blocked opportunities',
  'explanation' => 'Merton’s strain theory holds that lack of legitimate means to goals produces crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Which theory posits that crime is learned through interaction with others?',
  'choices'     => json_encode([
    'Social learning theory',
    'Biological positivism',
    'Social bond theory',
    'Rational choice theory',
  ]),
  'answer'      => 'Social learning theory',
  'explanation' => 'Bandura’s social learning theory explains criminal behavior as learned via imitation and reinforcement.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Labeling theory focuses on the impact of which process on criminal identities?',
  'choices'     => json_encode([
    'Societal reaction',
    'Economic strain',
    'Biological factors',
    'Routine activities',
  ]),
  'answer'      => 'Societal reaction',
  'explanation' => 'Labeling theory examines how being branded as “deviant” influences self‐identity and future crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Routine activity theory asserts that crime occurs when a motivated offender and target converge in absence of:',
  'choices'     => json_encode([
    'Capable guardian',
    'Moral education',
    'Biological predisposition',
    'Peer group influence',
  ]),
  'answer'      => 'Capable guardian',
  'explanation' => 'Cohen and Felson’s theory emphasizes the role of guardianship in preventing crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Differential association theory was developed by:',
  'choices'     => json_encode([
    'Edwin Sutherland',
    'Cesare Lombroso',
    'Robert Merton',
    'Travis Hirschi',
  ]),
  'answer'      => 'Edwin Sutherland',
  'explanation' => 'Sutherland’s theory explains crime as learned behavior acquired through intimate groups.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'General strain theory was proposed by:',
  'choices'     => json_encode([
    'Robert Agnew',
    'Cesare Beccaria',
    'Emile Durkheim',
    'Albert Bandura',
  ]),
  'answer'      => 'Robert Agnew',
  'explanation' => 'Agnew expanded strain theory to include a broader range of stressors leading to crime.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Which conflict theory views crime as an outcome of social and economic inequality?',
  'choices'     => json_encode([
    'Marxist criminology',
    'Social bond theory',
    'Rational choice theory',
    'Anomie theory',
  ]),
  'answer'      => 'Marxist criminology',
  'explanation' => 'Marxist theory interprets crime through power disparities and class struggles.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Which type of crime involves the unlawful taking of property by force or threat?',
  'choices'     => json_encode([
    'Robbery',
    'Burglary',
    'Larceny',
    'Embezzlement',
  ]),
  'answer'      => 'Robbery',
  'explanation' => 'Robbery involves theft with violence or intimidation, distinguishing it from burglary and larceny.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Burglary is defined as unlawful entry into a structure to commit:',
  'choices'     => json_encode([
    'A felony or theft',
    'A violent assault',
    'An administrative offense',
    'A traffic violation',
  ]),
  'answer'      => 'A felony or theft',
  'explanation' => 'Burglary focuses on the unlawful entry itself, regardless of whether theft occurs afterward.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'White‑collar crime is characterized by:',
  'choices'     => json_encode([
    'Nonviolent, financially motivated offenses by professionals',
    'Violent street crimes',
    'Crimes committed by juveniles',
    'Hate crimes',
  ]),
  'answer'      => 'Nonviolent, financially motivated offenses by professionals',
  'explanation' => 'Sutherland defined white‑collar crime as crimes committed by persons of respectability during their occupation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Organized crime typically features:',
  'choices'     => json_encode([
    'Hierarchical structure and profit motive',
    'Spontaneous acts of violence',
    'Single offender crimes',
    'Juvenile delinquents',
  ]),
  'answer'      => 'Hierarchical structure and profit motive',
  'explanation' => 'Organized crime groups operate as enterprises with leadership, membership, and financial goals.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Victimology studies the relationships among victims, offenders, and:',
  'choices'     => json_encode([
    'The criminal justice system',
    'Healthcare providers',
    'Educational institutions',
    'Religious organizations',
  ]),
  'answer'      => 'The criminal justice system',
  'explanation' => 'Victimology examines how victims interact with offenders and how the justice system responds.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Victim precipitation theory argues that victims:',
  'choices'     => json_encode([
    'May initiate or provoke criminal acts',
    'Are always passive',
    'Are solely responsible for crime',
    'Can never influence offenders',
  ]),
  'answer'      => 'May initiate or provoke criminal acts',
  'explanation' => 'This controversial theory suggests some victims play a role in the events leading to their victimization.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Lifestyle‑exposure theory links victimization risk to:',
  'choices'     => json_encode([
    'Daily activities and routines',
    'Biological traits',
    'Judicial decisions',
    'Media influence',
  ]),
  'answer'      => 'Daily activities and routines',
  'explanation' => 'This theory holds that certain lifestyles expose individuals to greater crime risk due to routine patterns.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 26,
  'part'        => 1,
  'question'    => 'Routine activities victimization theory requires a motivated offender, a suitable target, and:',
  'choices'     => json_encode([
    'Absence of capable guardian',
    'Economic deprivation',
    'Labeling process',
    'Genetic predisposition',
  ]),
  'answer'      => 'Absence of capable guardian',
  'explanation' => 'The absence of a guardian (person or device) creates opportunities for crimes to occur.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}
