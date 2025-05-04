<?php

namespace Database\Seeders\LET\Majorship\PhysicalEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhysicalEducationPart10Seeder extends Seeder
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
               // Part 10: Sports Officiating & Rules (refereeing, scoring systems, code of conduct)

        //1
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'In soccer, what does a yellow card signify?',
            'choices'    => json_encode([
                'A caution for misconduct',
                'An immediate sending-off',
                'A substitute allowed',
                'A penalty kick awarded',
            ]),
            'answer'     => 'A caution for misconduct',
            'explanation'=> 'A yellow card serves as a warning for unsporting behavior or repeated fouls.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //2
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'Two yellow cards in a soccer match result in:',
            'choices'    => json_encode([
                'Red card and sending-off',
                'Free kick',
                'Goal kick',
                'Corner kick',
            ]),
            'answer'     => 'Red card and sending-off',
            'explanation'=> 'Accumulation of two cautions (yellow cards) leads to a red card and dismissal.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //3
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'In basketball, a double dribble occurs when a player:',
            'choices'    => json_encode([
                'Stops dribbling and then resumes dribbling',
                'Dribbles with two hands simultaneously',
                'Both of the above',
                'None of the above',
            ]),
            'answer'     => 'Both of the above',
            'explanation'=> 'Double dribble is called if a player either dribbles with both hands or restarts dribble after stopping.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //4
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'What is goaltending in basketball?',
            'choices'    => json_encode([
                'Interfering with a shot on its downward trajectory',
                'Blocking a shot above the rim correctly',
                'Dribbling the ball off the backboard',
                'Stepping out of bounds',
            ]),
            'answer'     => 'Interfering with a shot on its downward trajectory',
            'explanation'=> 'Goaltending is illegal if the defender touches the ball on its downward path to the basket.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //5
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'How many officials are on court in an NBA basketball game?',
            'choices'    => json_encode([
                '3',
                '2',
                '4',
                '5',
            ]),
            'answer'     => '3',
            'explanation'=> 'NBA uses a three-referee system: one crew chief and two umpires.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //6
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'In volleyball, a team may contact the ball up to how many times before sending it over the net?',
            'choices'    => json_encode([
                '3',
                '2',
                '4',
                '5',
            ]),
            'answer'     => '3',
            'explanation'=> 'Teams are allowed three touches (excluding block) before returning the ball.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //7
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'What is a foot fault in tennis?',
            'choices'    => json_encode([
                'Server’s foot touches or crosses the baseline before hitting serve',
                'Server misses the ball entirely',
                'Racket head below waist during serve',
                'Returning player steps over net',
            ]),
            'answer'     => 'Server’s foot touches or crosses the baseline before hitting serve',
            'explanation'=> 'Foot faults occur when server’s foot infringes on the baseline during serve motion.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //8
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'In track sprints, what happens on the first false start under current rules?',
            'choices'    => json_encode([
                'Immediate disqualification',
                'Warning issued to all athletes',
                'Rerun race without the offender',
                'Time added to result',
            ]),
            'answer'     => 'Immediate disqualification',
            'explanation'=> 'Under IAAF rules, any athlete false starting is disqualified immediately.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //9
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'What does a referee’s whistle signal in most sports?',
            'choices'    => json_encode([
                'Stop play or start play change',
                'Award points',
                'Substitute player',
                'Timeout only',
            ]),
            'answer'     => 'Stop play or start play change',
            'explanation'=> 'The whistle is used to control the flow: stop action and mark restarts.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //10
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'In boxing, what does a “TKO” stand for?',
            'choices'    => json_encode([
                'Technical Knockout',
                'Total Knockout',
                'Timed Knockout',
                'True Knockout',
            ]),
            'answer'     => 'Technical Knockout',
            'explanation'=> 'TKO is declared when the referee stops the bout for safety reasons.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //11
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'What is unsportsmanlike conduct?',
            'choices'    => json_encode([
                'Behavior that disrespects fair play or officials',
                'Winning by a large margin',
                'Coaching players',
                'Cheering teammates',
            ]),
            'answer'     => 'Behavior that disrespects fair play or officials',
            'explanation'=> 'Unsportsmanlike conduct includes dissent, profanity, or intentional fouls.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //12
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'Which principle guides officiating ethics?',
            'choices'    => json_encode([
                'Impartiality and fairness',
                'Favoritism',
                'Profit maximization',
                'Spectator preference',
            ]),
            'answer'     => 'Impartiality and fairness',
            'explanation'=> 'Officials must remain neutral and apply rules consistently to all participants.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //13
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'In water polo, what does an exclusion foul result in?',
            'choices'    => json_encode([
                'Temporary removal for 20 seconds',
                'Goal awarded',
                'Timeout',
                'Free throw only',
            ]),
            'answer'     => 'Temporary removal for 20 seconds',
            'explanation'=> 'Excluded players must leave the game area for 20 seconds or until a goal is scored.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //14
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'What violation occurs in basketball when a player fakes a pass or shot then resumes dribbling?',
            'choices'    => json_encode([
                'Palming or carrying',
                'Traveling',
                'Double dribble',
                'Goal tending',
            ]),
            'answer'     => 'Palming or carrying',
            'explanation'=> 'Palming is illegal handling of the ball by placing the hand under it and turning it over.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //15
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'Which rule in track and field penalizes athletes for flapping arms instead of clearing hurdles?',
            'choices'    => json_encode([
                'Improper clearance',
                'False start',
                'Lane violation',
                'Delay of event',
            ]),
            'answer'     => 'Lane violation',
            'explanation'=> 'Failing to stay within one’s lane or touching other hurdles incur disqualification.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //16
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'In tennis, what does the term “let” mean?',
            'choices'    => json_encode([
                'Serve replay due to net contact',
                'Fault on serve',
                'Player timeout',
                'Change ends of court',
            ]),
            'answer'     => 'Serve replay due to net contact',
            'explanation'=> 'A let is called when the serve touches the net but lands in the correct service box.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //17
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'What is a balk in competitive track cycling?',
            'choices'    => json_encode([
                'Illegal start movement',
                'Rider collision',
                'Equipment failure',
                'Low tire pressure',
            ]),
            'answer'     => 'Illegal start movement',
            'explanation'=> 'A balk occurs when a cyclist makes a deceptive movement at the start, causing false start.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //18
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'Under world boxing rules, what does “RSC” stand for?',
            'choices'    => json_encode([
                'Referee Stopped Contest',
                'Red Score Count',
                'Ring Side Check',
                'Rounds Score Card',
            ]),
            'answer'     => 'Referee Stopped Contest',
            'explanation'=> 'RSC indicates the referee stopped the bout for safety or injury.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //19
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'Which principle requires officials to avoid any conflict of interest?',
            'choices'    => json_encode([
                'Independence',
                'Consistency',
                'Punctuality',
                'Enthusiasm',
            ]),
            'answer'     => 'Independence',
            'explanation'=> 'Officials must remain independent and unbiased from teams or participants.',
            'created_at' => $now,
            'updated_at' => $now,
        ];
        //20
        $batch[] = [
            'subject_id' => 18,
            'part'       => 10,
            'question'   => 'What is the appropriate conduct for an official when approached by a coach after a game?',
            'choices'    => json_encode([
                'Remain professional and refer any concerns to proper channels',
                'Engage in debate on decisions',
                'Accept gifts if offered',
                'Ignore all communication',
            ]),
            'answer'     => 'Remain professional and refer any concerns to proper channels',
            'explanation'=> 'Officials must handle feedback respectfully and direct disputes through formal review processes.',
            'created_at' => $now,
            'updated_at' => $now,
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
