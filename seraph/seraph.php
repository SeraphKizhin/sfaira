<?php
$charName = "Seraph";
$title = "Light That Burns the Sky";
$stats = [
    "Element" => "Arcana - Savant <br> Mystweave - Beginner",
    "Origin" => "Sfairan / Asmodean",
    "Alignment" => "Chaotic Good",
    "Dominant Path" => "Path of Excess",
    "Affiliation" => "Batch 555-A"
];

$hp = "635";
$mp = "780";

$base_attributes = [
    "STR" => "30.5 (+9)",
    "DEX" => "30.0 (+8)",
    "CON" => "30.0 (+8)",
    "INT" => "30.5 (+8)",
    "CHA" => "20.5 (+1)"
];

$avaricious_heart = [
    "STR" => "33.5 (+11)",
    "DEX" => "33.0 (+11)",
    "CON" => "32.5 (+11)",
    "INT" => "32.3 (+11)",
    "CHA" => "22.5 (+6)"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $charName; ?> | Sfaira Wiki</title>
    <link rel="stylesheet" href="seraph_style.css">
</head>
<body>

<div class="wiki-container">
    <main class="main-content">
        <p class="content-subtitle">CHARACTER DOSSIER</p>
        <p class="content-subtitle-title">"<?php echo strtoupper($title); ?>"</p> 
        <h1 class="content-name" ><?php echo $charName; ?></h1> 
        
        <div class="big-line"></div>
        
        <section class="stats-section">
            <div class="resource-bars">
                <p><strong>HP:</strong> <?php echo $hp; ?></p>
                <p><strong>MP:</strong> <?php echo $mp; ?></p>
            </div>

            <div class="attributes-wrapper">
                <div class="attr-column">
                    <h3>[ BASE ATTRIBUTES ]</h3>
                    <ul class="attr-list">
                        <?php foreach($base_attributes as $stat => $val): ?>
                            <li><strong><?php echo $stat; ?>:</strong> <?php echo $val; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                        
                <div class="attr-column1">
                    <h3>[ AVARICIOUS HEART LV. 10 (FVYINA) ]</h3>
                    <ul class="attr-list">
                        <?php foreach($avaricious_heart as $stat => $val): ?>
                            <li><strong><?php echo $stat; ?>:</strong> <?php echo $val; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <div class="big-line"></div>

        <section>
            <details class="collapsible-section" open>
            <summary><h3>ABILITIES</h3></summary>

            <div class="ability-subsection">
                <h4>Avatar-Given Talents</h4>

                <div class="ability-item">
                    <p class="ability-header">(PA) : Selfish Preservation Lv. 10</p>
                    <div class="ability-tech">
                        Seraph's intense drive to survive allows him to use any creature in the battlefield as a meatshield. 
                         Whenever a target of 
                        Selfish Preservation takes damage, you gain 50% of the damage dealt as a temporary shield 
                        for the round. You also gain 10% of the dealt damage as a %damage bonus to your next melee or magic attack.
                        <div class="innate-talent-list">
                        	<strong>Eligibilty Rules:</strong><br>
                        	<ol>
                                <li>Seraph must be within twice the melee range of the target (6 Grids).</li>
                                <li>Selfish Preservation may only activate once per round.</li>
                                <li>Enemies become eligible targets after Seraph successfully damages them.</li>
                                <li>One successful damaging hit grants one Preservation Mark.</li>
                                <li>Consuming the mark allows exactly one swap with that enemy.</li>
                                <li>Marks disappear after being used or when combat ends.</li>
                                <li>Allies are always eligible targets and do not require marks.</li>
                                <li>Swapping with allies does not consume any special setup besides the once-per-round limitation.</li>
                            </ol>
                            <br>
                            <strong>After a successful swap:</strong><br>
                            <ol>
                                <li>Gain a temporary shield equal to 50% of the damage dealt to the swapped target until the end of the round.</li>
                                <li>Gain a damage bonus equal to 10% of the damage dealt on your next melee or magic attack.</li>
                            </ol>
                    	</div>
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">(IT) Avaricious Heart Lv. 10</p>
                    <div class="ability-tech">
                        Stealing an item from an ally will grant Seraph a reduced version of their innate talent. 
                        Two people at a time, and of these two people Seraph is copying, Seraph may choose one 
                        player to mimic their stats, adding up to ~10% of theirs onto his.
                    </div>
                    <div class="innate-talent-list">
                        <strong>Avaricious Heart Innate Talent List:</strong><br>
                        Fvyina's Sanguinexcess: When Seraph has stolen something 3 times, enter a state of greed 
                        wherein his damage is increased by 30%.
                    </div>
                </div>
            </div>

            <div class="ability-subsection">
                <h4>Reflection of Opportunism Talents</h4>

                <div class="ability-item">
                    <p class="ability-header">Opportunist’s Edge Lv. 2</p>
                    <p class="ability-quote">"An innate sense for seizing the perfect moment, turning the tide of battle and negotiations in our favor. - Finnick Slythart"</p>
                    <div class="ability-tech">
                        <strong>In combat, when an opponent:</strong><br>
                        <ol>
                            <li>misses an attack</li>
                            <li>fails a dodge</li>
                            <li>overextends</li>
                            <li>reloads</li>
                            <li>finishes channeling</li>
                            <li>or exposes themselves through positioning</li>
                        </ol><br>
                        <strong>Seraph may immediately exploit the opening once per round:</strong><br>
                        <ol>
                            <li>Make an attack dealing 75% damage</li>
                            <li>Reposition up to 2 squares without provoking reactions</li>
                            <li>Interact with an object/environment instantly</li>
                            <li>Attempt to steal, disarm, trip, or interrupt</li>
                        </ol><br>
                        <strong>If the opening was caused directly by Seraph:</strong><br>
                        <ol>
                            <li>The attack instead deals +125% damage</li>
                        </ol><br>
                        <br><br>
                        Additionally, once per day, Seraph may inform an ally of “the perfect moment” to execute 
                        what they’re going to do, giving them advantage.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Strategic Retreat Lv. 1</p>
                    <p class="ability-quote">"A *masterful* maneuver to escape danger and reposition ourselves for a better opportunity. Others say its cowardice but I calls it smart. - Finnick Slythart"</p>
                    <div class="ability-tech">
                        <strong>Tactical Withdrawal: </strong> A "guaranteed" escape option focused on survival.
                        <br>
                        <strong>Technical Use:</strong><br>
                        <ol>
                            <li>Immediately disengage from combat and rapidly reposition away from danger</li>
                            <li>Most enemies cannot meaningfully prevent this escape unless they possess specialized pursuit, locking, or anti-teleportation abilities</li>
                            <li>Once used this way, you may not willingly re-enter the same combat encounter</li>
                            <br><br>
                            <li> Can be used outside of combat up to 3 times per day to escape imminent danger, ambushes, collapses, or otherwise lethal situations</li>
                        </ol><br><br>
                        <strong>Feigned Retreat: </strong> A deceptive evasive maneuver intended to create an opening.
                        <ol>
                            <li>When targeted by an attack, dodge it and immediately reposition up to 2 squares. Enter a heightened state of stealth where you:
                                <ol>
                                    <li>Are a lot less likely to be targetted by enemies</li>
                                    <li>Deal 175% more damage on your next attack</li>
                                    <li>Lasts for one round, or until you attack/are hit</li>
                                </ol>
                            </li>
                            <li> The enemy is considered briefly overextended against your next attack. This trick can only be used once per enemy.</li>
                        </ol>
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Seize The Moment Lv. 2</p>
                    <p class="ability-quote">"The swiftness to act decisively and seize fleeting opportunities. - Finnick Slythart"</p>
                    <div class="ability-tech">
                        <strong>Technical Use:</strong> When an ally within 5 squares performs an action that nearly succeeds, 
                        creates pressure, or forces a reaction, Seraph may immediately capitalize on the situation.
                        <br><strong>Trigger Examples:</strong><br>
                        <ol>
                            <li>An ally barely misses an attack.</li>
                            <li>An ally barely fails a dodge.</li>
                            <li>An ally successfully staggers, restrains, corners, or pressures an enemy.</li>
                            <li>An ally forces an enemy to dodge, brace, block, or reposition.</li>
                            <li>An ally lands a multi-hit attack or creates a distraction/opening.</li>
                        </ol>
						<br><strong>When Triggered, Seraph may:</strong><br>
                        <ol>
                            <li>Immediately perform an attack(Base Damage: 100, subject to outside multipliers) against the affected enemy dealing +25% damage.</li>
                            <li>Move yourself or the triggering ally up to 2 squares without provoking reactions.</li>
                            <li>Reduce the target’s next attack's effectivity</li>
                        </ol>
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Eyes of the Desperate Lv. 2</p>
                    <p class="ability-quote">"My eyes will grant you the clarity to see even the smallest of chances to get ahead. I didn't *choose* the name though. - Finnick Slythart"</p>
                    <div class="ability-tech">
                        Desperation sharpens Seraph’s awareness to predatory levels.
                        <strong>When below 20% HP</strong><br>
                        <ol>
                            <li>Gain advantage on dodge rolls</li>
                            <li>Automatically notice most escape routes, loose valuables, weak structures, unstable footing, and vulnerable targets nearby</li>
                        </ol><br><br>
                        <strong>Whenever a nearby enemy becomes:</strong><br>
                        <ol>
                            <li>frightened</li>
                            <li>enraged</li>
                            <li>overconfident</li>
                            <li>Injured</li>
                            <li>Isolated</li>
                            <li>Distracted</li>
                        </ol><br>
                        Seraph gains +20% to rolls exploiting that weakness.
                    </div>
                </div>
            </div>
            <div class="ability-subsection">
                <h4>General Talents</h4>
                            
                <div class="ability-item">
                    <p class="ability-header">Mycorrhizan Physique</p>
                    <div class="ability-tech">D20 -> D25.</div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Tactical Harmony</p>
                    <div class="ability-tech"> You gain the ability to rearrange your team's turn order during combat encounters. This can be done once per encounter and only when you are not in combat. 
                        <br><br>Through Zephyr's emphasis on teamwork, you've mastered coordinated movements with your allies. Once per round, if you roll the maximum of your dice on an attack or dodge roll, you can call up an ally to follow-up on your move, dealing 50% of the damage they normally would.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Arabella's Principles</p>
                    <div class="ability-tech"> Elemental attacks deal a further 200% more damage to enemies wielding the opposite element that the user's. </div>
                    <div class="arcane-echo">
                        <strong>Elemental Oppositions:</strong><br>
                        <ol>
                            <li> Lightning <-> Ground/Earth </li>
                            <li> Fire <-> Water </li>
                            <li> Poison <-> Aetheris </li>
                            <li> Air <-> Ground/Earth </li>
                            <li> Arcana <-> N/A : deals 175% boost to every element </li>
                        </ol>
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Muscle Regeneration</p>
                    <div class="ability-tech"> When you receive damage, heal HP equivalent to your strength modifier. </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Diamond Resolve (Unmerge-able)</p>
                    <div class="ability-tech"> Take 57.5% reduced effects from most mental debuffs and status effects. Once every 3 days, guarantee a one-time resistance against any one status effect. </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Swift Rebuttal</p>
                    <div class="ability-tech">
                        Counter requirements are reduced by 2, and counterattacks deal +125% damage. 
                        Be able to add 1d6 to strictly counter rolls.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Jetstep Barrage</p>
                    <div class="ability-tech">
                        Every square moved toward a target before a melee attack builds Momentum (+15% dmg). 
                        Once per round, you may perform a burst step (a four square leap in any direction). 
                        If used towards an enemy, it doubles the momentum stacks from that movement.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Eloquence</p>
                    <div class="ability-tech">Roll 10% higher on charisma checks.</div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Spellcraft: Reverse Engineer</p>
                    <div class="ability-tech">
                        When an enemy casts a magical ability within 6 squares of you, you may spend your turn analyzing it. 
                        On your next turn, you may cast a weakened version (approx. 75%) of that ability. 
                        <strong>Cost:</strong> 50% of your mana.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Thanatosubjugation</p>
                    <div class="ability-tech">
                        Allows Seraph to brainwash an enemy to follow his will.<br><br>
                        <strong>Prerequisites:</strong>
                        <ol>
                            <li>Target must be caught off-guard.</li>
                            <li>Direct eye contact must be established.</li>
                            <li>Seraph must have higher INT than the target.</li>
                        </ol>
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Arcane Dominion</p>
                    <div class="ability-tech">
                        Create a 1x2 square radius at a point within 5 squares. Any person inside the area 
                        will deal 150% more damage.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Opulent Cleave</p>
                    <div class="ability-tech">
                        Single-target melee damage is reduced to 80%. Hitting multiple targets 
                        increases damage by (20/40/60...)% based on the number of targets.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Mana Proficiency</p>
                    <div class="ability-tech">
                        10% less mana consumption.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Arcane Echo</p>
                    <div class="ability-tech">
                        Very heavy mana cost, creates a mirage of the user which mimics their latest action at their cue. 
                        Deals 50% of the original damage dealt if an attack, mirage lasts the round. Values may vary if used to emulate an enemy's attack. 
                    </div>
                    <div class="arcane-echo">
                        <strong>Stored Arcane Echo:</strong><br>
                        Verlierer's Sigil Spell: Floris Ultimus. MP Cost: 605
                    </div>
                </div>


            </div>
            <div class="ability-subsection">
                <h4>Incantation and Sigil Spells</h4>

                <div class="ability-item">
                    <p class="ability-header">Sigil Spell: Paradise Lost Lv. 2</p>
                    <div class="ability-tech">
                        <strong>[ Drop of Calamity ]</strong> Once the sigil is fully drawn, it manifests above the battlefield. An orb of blood is forced out of every living being present, siphoning 12.5% of their HP (up to 6% from bosses). The orbs spiral into the sigil as it grows in size and brilliance.<br><br>

                        <strong>[ Star of Indulgence ]</strong> Seraph indulges in his perceived divinity, gaining an illusion of wings and immunity while flying skyward. Seraph may choose one of the following release methods:
                        
                        <ul style="margin-top:10px;">
                            <li><strong>A) Immediate Release:</strong> The sigil fires on the start of his turn, discharging 100 bolts. Each bolt deals 1.7× absorbed HP damage, prioritizing enemies in his line of sight.</li>
                            <li><strong>B) Charge:</strong> Seraph may delay release for up to 3 battle turns. Each turn held increases the absorbed HP multiplier by +10% (max +30%).</li>
                        </ul>
                        
                        <div class="paradise-lost" style="border-top: 1px solid #ddd; padding-top: 5px;">
                            <strong>Visual Progression:</strong><br>
                            Turn 1: Sigil glows brighter with pulsing streaks of light.<br>
                            Turn 2: Wings intensify; bolts shimmer with blue flames.<br>
                            Turn 3: Sigil expands massively with hundreds of orbiting orbs.
                        </div>
                    </div>
                </div>
                        
                <div class="ability-item">
                    <p class="ability-header">Incantation Spell: Ain Soph</p>
                    <div class="ability-tech">
                        A rush of arcane adrenaline surges through the target's veins. Seraph may choose an ally (or himself) to unshackle from gravity. 
                        <br><br>
                        <strong>[ Vox Libertatis ]</strong> The target gains advantage on their next Dexterity saving throw and movement speed is increased by 50% until the start of Seraph's next turn. 
                        <br><br>
                        <strong>Aftermath:</strong> As the effect subsides, the target feels "chained," reducing their movement speed by 25% until the end of their following turn.
                    </div>
                </div>
            </div>

            <div class="ability-subsection">
                <h4>Contract Abilities</h4>
                            
                <div class="ability-item">
                    <p class="ability-header">The House</p>
                    <div class="ability-tech">You gain a stack of three cards, bound to your soul. Each card can store a 1 meter^3 worth of physical objects. 
                        The object/s will automatically be rearranged to fit in the square, dealing no physical damage. 
                        At any time, you may release said object from a card.
                        <div class="the-house" style="border-top: 1px solid #ddd; padding-top: 5px;">
                            <strong>Storing Mechanics:</strong><br>
                            Any stored object will maintain the momentum it had before being sucked into the card.<br>
                            You may store living things, though you must have their consent.<br>
                            Any stored living creature may at most only stay for 10 minutes.<br>
                            Time inside the cards is wobbly.<br>
                            You may gamble a stored item and have it be swapped with an item in the Concept of Scheme's own deck of cards. 
                            Roll a 1d6 to determine what quality of item you receive in return.
                        </div>
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">The Messiah</p>
                    <div class="ability-tech">Each restorative act that Seraph does will grant him one Salvation point. 
                        Spending two salvation points will activate the 'Messiah' state for a battle. 
                        <div class="the-messiah" style="border-top: 1px solid #ddd; padding-top: 5px;">
                            <strong>Messiah Mechanics:</strong><br>
                            When in the 'Messiah state: Most healing spells and buffs that you can cast, are 125% more potent.<br>
                            Mercy Pulse: When in the 'Messiah' state, your buffs now cleanses debuffs, replacing them with its positive counterpart if possible.<br>
                            Pureflow Channeling: Buffs and healing used in selfless contexts now cost 50% less mana and instead of being 120% more potent, they'll be 150% more potent.
                        </div>
                    </div>
                </div>
            </details>
        </section>

        <div class="big-line"></div>

        <section>
            <details class="collapsible-section" open>
            <summary><h3>ITEMS</h3></summary>

            <div class="ability-subsection">
                <div class="ability-item">
                    <p class="ability-header">Guide to Healing 202</p>
                    <div class="ability-tech">
                        <strong>Effect:</strong> Furthers the reader's understanding of healing magic. Seraph must have at least a basic understanding of healing magic in order to utilize this guide.<br><br>
                        <strong>Mechanics:</strong> A D20 is rolled to determine effectiveness. Each number above 10 increases the healing's effectivity by 5%.<br><br>
                        <strong>Mana-to-HP Ratio:</strong> The ratio of target HP% healed to mana spent is 1:1. For example, using 10% of mana heals 10% of the target's HP. The one-time heal amount is capped by Seraph's current mana pool (e.g., healing 10% of a 10,000 HP target with only 400 mana will result in a max heal of 400).
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Cloak of One's Greatest Fears</p>
                    <div class="ability-tech">
                        <strong>Passive:</strong> The wearer gains a 20% bonus to their Charisma.<br>
                        <strong>Active:</strong> Once per day, Seraph may morph into a target's greatest fear.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Veilspore Capsule</p>
                    <div class="ability-tech">
                        Reusable every 2 rounds. Creates a small cloud in a 2-square radius. Enemies inside have reduced accuracy and increased vulnerability to mental status effects.
                    </div>
                </div>
            </div>
            </details>
        </section>

        <div class="big-line"></div>

        <section>
            <details class="collapsible-section" open>
            <summary><h3>MOLANG, THE SYMBIOTE</h3></summary>

            <div class="ability-subsection">
                <div class="ability-item">
                    <p class="ability-header">Spore-Weaver</p>
                    <div class="ability-tech">
                        Upon striking an opponent, the Spore-weaver releases a burst of mycelial energy that infuses the target with dormant fungal spores. 
                        <br><br>
                        <strong>Progression:</strong> As these growths take root, the target becomes increasingly susceptible to attacks (105% &rarr; 110% &rarr; 115% ... up to 130%). 
                        <br><br>
                        <strong>Peak Effect:</strong> After roughly 5 attacks, the spores erupt in a burst of fungal growth, delaying the target's turn and dealing 5% percentile damage.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Symbiote: 1st Stage Evolution</p>
                    <div class="ability-tech">
                        <strong>Mechanical Features:</strong>
                        <ul>
                            <li>Increases Seraph's melee range by 1 square. Attacks at this extended range do not proc abilities from his Avatar-given weapon.</li>
                            <li>Melee attacks made within Seraph's standard range are replicated by the arm when possible, dealing 50% of the initial damage.</li>
                            <li>Each replicated attack inflicts a stack of <em>'Mycelial Infusion,'</em> increasing damage taken by the target by 120% per stack.</li>
                            <li>The arm can be used to swing across the environment, increasing movement in a chosen direction by 3 squares.</li>
                        </ul>

                        <strong>Biological & Sentient Features:</strong>
                        <p class="ability-quote">"This arm has developed its own form of sentience."</p>
                        <ul>
                            <li><strong>Autonomy:</strong> Molang will occasionally parry incoming attacks if it feels threatened.</li>
                            <li><strong>Temperament:</strong> The arm may occasionally disobey commands; its cooperation depends entirely on how Seraph treats it.</li>
                            <li><strong>Growth:</strong> Requires organic matter as sustenance to facilitate further evolution.</li>
                        </ul>
                    </div>
                </div>
            </div>
            </details>
        </section>

        <div class="big-line"></div>

        <section>
            <details class="collapsible-section" open>
            <summary><h3>MAGIC</h3></summary>

            <div class="ability-subsection">
                <h4>Savant Arcana Feats</h4>

                <div class="ability-item">
                    <p class="ability-header">1) Mana Weaving</p>
                    <div class="ability-tech">
                        Seraph manipulates raw mana strands in the air, weaving them into temporary spell matrices that alter or reinforce magic.
                        <br><br>
                        <strong>Support:</strong> When Seraph or an ally casts a spell within 3 squares, he may weave additional mana into it. A 1d6 is rolled to determine the strength of the weave (a roll of 6 provides a 45% boost in effectivity).
                        <br><br>
                        <strong>Disruption:</strong> If used on enemy magic, Seraph may instead attempt to destabilize the spell.
                        <br><br>
                        <strong>MP Cost:</strong> 150
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">2) Arcane Overchannel</p>
                    <div class="ability-tech">
                        Seraph forces additional mana through his spells, pushing them beyond normal limits.
                        <br><br>
                        <strong>Effect:</strong> The next spell cast gains +50% potency (damage, duration, or effect strength).
                        <br><br>
                        <strong>Backlash:</strong> The spell becomes unstable, causing minor backlash damage to Seraph equal to 50% of his HP.
                        <br><br>
                        <strong>MP Cost:</strong> 200
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">3) Arcane Perception</p>
                    <div class="ability-tech">
                        Mastery of mana allows Seraph to perceive deeper layers of magical structures.
                        <br><br>
                        <strong>Effect:</strong> Seraph gains detailed awareness of mana flows within 4 squares. He can identify spell preparation, hidden enchantments, magical constructs, and unstable mana zones.
                        <br><br>
                        <strong>MP Cost:</strong> 120
                    </div>
                </div>
            </div>

            <div class="ability-subsection">
                <h4>Beginner Mystweave Magic</h4>

                <div class="ability-item">
                    <p class="ability-header">Minor Visual Illusions</p>
                    <div class="ability-tech">
                        Seraph can create small, simple visual illusions such as flickering lights, small moving objects, or basic shapes.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Sound Mimicry</p>
                    <div class="ability-tech">
                        Seraph can imitate basic sounds, such as footsteps, animal noises, or simple phrases, which can be utilized for creating distractions or misleading enemies.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">Basic Invisibility</p>
                    <div class="ability-tech">
                        Seraph can render small objects or his own body invisible for a short duration, allowing for brief concealment or trickery.
                    </div>
                </div>
            </div>
            </details>
        </section>

        <div class="big-line"></div>

            <section>
            <details class="collapsible-section" open>
            <summary><h3>SUMMONS & HATCHLINGS</h3></summary>

            <div class="ability-subsection">
                <h4>Call of the Hollow Depths (Imitation²)</h4>
                <div class="ability-item">
                    <p class="ability-tech" style="margin-bottom: 20px;">
                        Seraph creates a specific sequence of vibrations through the ground to attract a random worm. 
                        The worm can be thrown to aggro a target or utilized as a mount. 
                        While riding, damage is transferred to the worm unless Seraph is specifically targeted.
                    </p>
                                
                    <div class="summon-grid">
                        <div class="summon-card">
                            <img src="../images/grubkin.png" alt="Azathoth">
                            <div class="summon-info">
                                <strong>1. Azathoth (Grubkin)</strong>
                                <span>HP: 50 | Puppy-sized</span>
                                <p>Can crawl into small spaces and chew through materials.</p>
                            </div>
                        </div>
                                
                        <div class="summon-card">
                            <img src="../images/cystling.png" alt="Yog-Sothoth">
                            <div class="summon-info">
                                <strong>2. Yog-Sothoth (Cystling)</strong>
                                <span>HP: 150 | Cat-sized</span>
                                <p>Can poison enemies. Mounting not recommended (will pop).</p>
                            </div>
                        </div>
                                
                        <div class="summon-card">
                            <img src="../images/hollow_maw.png" alt="Nyarlathotep">
                            <div class="summon-info">
                                <strong>3. Nyarlathotep (Hollow Maw)</strong>
                                <span>HP: 300 | +2 Move</span>
                                <p>Latch onto enemies for 5% percentile damage each turn.</p>
                            </div>
                        </div>
                                
                        <div class="summon-card">
                            <img src="../images/fangy.png" alt="Fangy">
                            <div class="summon-info">
                                <strong>4. Fangy (Gilded Fangworm)</strong>
                                <span>HP: 500 | +3 Move</span>
                                <p>Immune to psychic attacks. Horse-sized and fast.</p>
                            </div>
                        </div>
                                
                        <div class="summon-card">
                            <img src="../images/bubbles.png" alt="Bubbles">
                            <div class="summon-info">
                                <strong>5. Bubbles (Broodsplitter)</strong>
                                <span>HP: 600 | +5 Move</span>
                                <p>Can split into two 250 HP Brood Shards.</p>
                            </div>
                        </div>
                                
                        <div class="summon-card">
                            <img src="../images/marshmallow.png" alt="Marshmallow">
                            <div class="summon-info">
                                <strong>6. Marshmallow (Baby Connoisseur)</strong>
                                <span>HP: 800 | Rhino-sized</span>
                                <p>Fairly obedient. Can transport Seraph underground.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ability-subsection">
                <h4>Active Hatchlings & Conduit Summons</h4>

                <div class="ability-item">
                    <div class="section-with-sidebar">
                        <div class="section-content">
                            <p class="ability-header">Mykharpus Hatchling: Khappang (??? Egg)</p>
                            <div class="ability-tech">
                                A smooth, dark egg wrapped in mycelium filaments. It appears to observe its surroundings even while unhatched.
                                <br><br>
                                <strong>Hatching Condition:</strong> Seraph must perform 10 aerial attacks that kill a target while holding the egg.
                            </div>
                        </div>
                        <aside class="infobox secondary-infobox" style="max-width: 150px;">
                            <div class="infobox-image" style="border: none;">
                                <img src="../images/khappang_egg.png" alt="Khappang Egg" style="width:100%; border: 1px solid #ddd;">
                            </div>
                        </aside>
                    </div>
                </div>

                <div class="ability-item">
                    <div class="section-with-sidebar">
                        <div class="section-content">
                            <p class="ability-header">Ethereal Serpentkin Minnow: Lumi</p>
                            <div class="ability-tech">
                                Summoned via the <strong>Luminarian Conduit</strong>. Lumi provides a constant presence of ethereal energy.
                                <br><br>
                                <strong>Combat Support:</strong> Heals 4% of the group's HP every round. 
                                <br><br>
                                <strong>Behavior:</strong> Lumi tends to coil around Seraph's shoulders when not actively weaving through the battlefield, flickering with a soft, pale light that reveals hidden tracks or magical residue nearby.
                            </div>
                        </div>
                        <aside class="infobox secondary-infobox" style="max-width: 150px;">
                            <div class="infobox-image" style="border: none;">
                                <img src="../images/Lumi.jpeg" alt="Lumi" style="width:100%; border: 1px solid #ddd;">
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            </details>
        </section>

        <div class="big-line"></div>

        <section>
            <details class="collapsible-section" open>
            <summary><h3>CONTRACTS</h3><summary>

            <div class="ability-subsection">
                <h4>Concept of Schemes</h4>

                <div class="ability-item">
                    <p class="ability-header">I. Purpose</p>
                    <div class="ability-tech">
                        <ul>
                            <li>To establish and fund a religious-charitable front for the dual purposes of:</li>
                            <li>Generating public goodwill through visible mercy operations.</li>
                            <li>Disguising financial operations of less-than-heavenly origin.</li>
                        </ul>
                    </div>
                </div>   
                <div class="ability-item">
                    <p class="ability-header">II. Investment Terms</p>
                    <div class="ability-tech">
                        <ul>
                            <li>The Benefactor (The Concept of Schemes) agrees to fund the operations of St. Seraph’s House of Mercy with a monthly stipend not exceeding 10,000 Ciscorin, allocated toward necessary expenses.</li>
                            <li>“Necessary” includes, but is not limited to: rent, clergy uniforms, soup ingredients, stone statues, bribes, holy water, orphan expenses, candles, propaganda, pest removal, and legal insulation.</li>
                            <li>“Necessary” shall be determined collaboratively, defaulting to the Benefactor’s discretion only in cases of direct conflict.</li>
                            <li>If consensus cannot be reached, final judgment shall fall to the System’s behest.</li>
                        </ul>
                    </div>
                </div>
                <div class="ability-item">
                    <p class="ability-header">III. Seraph’s Obligations</p>
                    <div class="ability-tech">
                        <ul>
                            <li>Seraph shall maintain the illusion of sincere devotion to the institution and the cause, including—but not limited to—rituals, weeping on command, and dramatic lighting.</li>
                            <li>Seraph shall accept and bear the Seal of the Schemer’s Hand, to be worn on his person or within reach, marking him as a recognized agent of the Concept of Schemes in social, legal, and metaphysical spaces, when beneficial to both parties.</li>
                            <li>All expansions, public speeches, donations, or infrastructural changes must be reported to the Benefactor within three (3) days or when logistically feasible, unless such reporting would compromise operational security.</li>
                        </ul>
                    </div>
                </div>
                <div class="ability-item">
                    <p class="ability-header">IV. Control & Autonomy</p>
                    <div class="ability-tech">
                        <ul>
                            <li>In exchange for continued funding, Seraph recognizes the strategic oversight of the Benefactor, who may enact, cancel, or “revise” any operation at any time.</li>
                            <li>Field autonomy remains Seraph’s in real-time situations, provided such actions align with the broader schematics of the enterprise.</li>
                            <li>Seraph preserves the right to dissolve this contract only if the contract poses active, documentable danger to his physical or metaphysical wellbeing. Proof to be submitted via authorized channels and reviewed by the Benefactor.</li>
                        </ul>
                    </div>
                </div>
                <div class="ability-item">
                    <p class="ability-header">V. Reciprocity & Retaliation</p>
                    <div class="ability-tech">
                        Should either party betray the spirit of this agreement in pursuit of personal enrichment without mutual gain, the other party may cheat first, with no moral, legal, or cosmic consequences.
                    </div>
                </div>
                <div class="ability-item">
                    <p class="ability-header">VI. Final Provisions</p>
                    <div class="ability-tech">
                        <ul>
                            <li>This contract is irrevocable, indivisible, and unenforceable only when unenforced by design or by the Benefactor.</li>
                            <li>The Benefactor shall be granted three favors of undefined scope, claimable at any time, in any form.</li>
                            <li>Should Seraph perish, defect, or attempt independence, all assets, properties, members, and orphans of St. Seraph’s House of Mercy shall become the property of the Benefactor, to be reassigned, repurposed, or reshuffled as the cards deem fit.</li>
                            <li>Seraph agrees to continue entertaining those under the path of Excess.</li>
                            <li>The Concept of Schemes agrees to pay 15% of the cost for the mental, physical, psychological, or metaphysical damages that Seraph receives when in the act of entertaining those under the path of excess.</li>
                            <li>The Concept of Schemes agrees to pay 17.9% of the cost for the mental, physical, psychological, or metaphysical damages that Seraph receives when in the act of entertaining those under the path of excess.</li>
                        </ul>
                        <div class="note-box">
                            Additional note: 'Screw you, Finnick Slyhart.'
                        </div>
                    </div>
                </div>
            </div>

            <div class="ability-subsection">
                <h4>Concept of Redemption</h4>

                <div class="ability-item">
                    <p class="ability-header">I. Conditions</p>
                    <div class="ability-tech">
                        <ul>
                            <li>Seraph must confess a wrongdoing of his past or present once per week to someone affected, a proxy of Redemption, or the Concept of Redemption herself. These confessions must be sincere and not curated for image.</li>
                            <li>Redemption powers must never be used in direct service of personal profit (e.g., healing a paying client or buffing during a heist).</li>
                            <li>Seraph must give enemies a sincere and actionable chance to surrender before attacking lethally, unless doing so undoubtedly risks a life. He must also prevent allies from performing such lethal attacks.</li>
                            <li>Seraph must attempt at least 3 restorative acts per week for someone he has wronged (e.g., saving a life, undoing a scheme, or financial compensation). The definition of a "restorative act" is at the discretion of the Concept of Redemption.</li>
                        </ul>
                    </div>
                </div>           
            </div>
            </details>
        </section>
                        
        <div class="big-line"></div>

        <section>
            <details class="collapsible-section" open>
            <summary><h3>FEATS</h3></summary>

            <div class="ability-subsection">
                <div class="ability-item" style="border-left: 4px solid #cad175;">
                    <p class="ability-header">★★ Notable Feat: "Almost Obeyed"</p>
                    <p class="sidebar-subtitle" style="font-size: 0.75rem; color: #666;">Fvyina, Seraph, Aurelius // ++Valor, ++Freedom, +Conflict</p>
                    <div class="ability-tech">
                        This feat is applicable whenever Seraph faces overwhelming control or authoritarian forces. 
                        It is particularly effective for resisting powerful manipulators, authority figures, or beings of control (such as those on the Path of Tyranny). 
                        Seraph's strength and resolve increase significantly when resisting mental or magical domination from such entities.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">★ Minor Feat: "420 Shades of Green"</p>
                    <p class="sidebar-subtitle" style="font-size: 0.75rem; color: #666;">Seraph // ++Excess, ++Opportunity</p>
                    <div class="ability-tech">
                        Consuming a portion of Seraph's own product provides a passive increase to his Charm and aids in relaxation.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">★ Minor Feat: "Mycelial Prodigy"</p>
                    <p class="sidebar-subtitle" style="font-size: 0.75rem; color: #666;">Batch 555-A // General</p>
                    <div class="ability-tech">
                        Seraph's growth in all fields of study and skill development is passively and slightly increased.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">★ Minor Feat: "Butterfly Seductor"</p>
                    <p class="sidebar-subtitle" style="font-size: 0.75rem; color: #666;">Batch 555-A // ++Excess</p>
                    <div class="ability-tech">
                        The act of seducing or attracting butterflies comes significantly easier to Seraph.
                    </div>
                </div>

                <div class="ability-item">
                    <p class="ability-header">★ Minor Feat: “Caboose Catastrophe”</p>
                    <p class="sidebar-subtitle" style="font-size: 0.75rem; color: #666;">Seraph // ++Chaos, ++Comedy, +Fate</p>
                    <div class="ability-tech">
                        Seraph's attempts to intervene in tense situations are notoriously unpredictable. 
                        Occasional failures will trigger chain reactions that affect the battlefield in unexpected ways. 
                        These events are typically signaled by a distinct trembling in Seraph's left glute.
                    </div>
                </div>
            </div>
            </details>
        </section>

        <div class="big-line"></div>

        <section>
            <h3>LORE</h3>
            <p class="lore-body">
                Seraph's lorem ipsum blahblahblah
            </p>
        </section>
        
        <div class="big-line"></div>
    </main>

    <aside class="side-info">
        <div class="infobox">
            <div class="infobox-title"><?php echo $charName; ?></div>
            <div class="infobox-image">
                <img src="../images/Seraph.png" alt="Seraph" style="width:100%; height:auto; background:#eee;">
                <p style="font-size: 0.8em;">Seraph's current appearance</p>
            </div>
            
            <table class="infobox-table">
                <?php foreach($stats as $label => $info): ?>
                <tr>
                    <th><?php echo $label; ?></th>
                    <td><?php echo $info; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="infobox secondary-infobox" style="margin-top: 20px; border: 2px solid #841c1c;">
            <div class="infobox-title" style="background: #841c1c; color: white;">CURRENT WEAPON</div>
            <div class="infobox-image">
                <img src="../images/Kanabo.png" alt="Kanabo of Greed" style="width:100%; height:auto; background:#eee;">
                <p style="font-weight: bold; margin-top: 5px;">Kanabo of Greed</p>
            </div>
            <table class="infobox-table">
                <tr>
                    <th style="background: #f1f1f1;">Mastery</th>
                    <td>Proficient</td>
                </tr>
            </table>
            <div style="padding: 10px; font-size: 0.85em; border-top: 1px solid #ddd;">
                <p><strong>Ability:</strong> What's yours is mine, and what's mine is mine.</p>
                <p style="font-style: italic; color: #555; margin-top: 5px;">
                    Rolling a nat20 or higher on a melee attack causes the mace to devour one of the target's moves. 
                    The stolen move functions at 25% strength and prevents the target from using it until Seraph releases the move. 
                    The mace may vomit the move out prematurely depending on its strength.
                </p>
            </div>
        </div>

        <div class="infobox familiar-infobox" style="margin-top: 20px; border: 2px solid #27722e;">
            <div class="infobox-title" style="background: #27722e; color: white;">FAMILIAR</div>
            <div class="infobox-image">
                <img src="../images/Tangtang.png" alt="Tangtang" style="width:100%; height:auto; background:#eee;">
                <p style="font-weight: bold; margin-top: 5px;">Tangtang</p>
            </div>

            <div style="padding: 10px; font-size: 0.85em; background: #f0f7ff;">
                <strong>Species:</strong> Grinling Crocxy<br>
                <strong>Type:</strong> Makeshift; Opportunistic Mimic<br>
                <strong>Affinity:</strong> Adaptive / Social Infiltration
            </div>

            <table class="infobox-table">
                <tr>
                    <th>HP</th>
                    <td>25% of Seraph's Max</td>
                </tr>
                <tr>
                    <th>Base Dmg</th>
                    <td>12</td>
                </tr>
                <tr>
                    <th>Move</th>
                    <td>4 Squares</td>
                </tr>
            </table>

            <div style="padding: 10px; font-size: 0.85em; border-top: 1px solid #ddd;">
                <p><strong>Unique Trait: Undying?</strong></p>
                <p style="font-size: 0.8em; margin-bottom: 5px;">
                    Partially immortal. Conventional damage cannot kill it. Only <strong>Radiant/Holy</strong> or <strong>Life-Aligned</strong> magic reduces it to 0 HP. Otherwise, it reconstitutes at the start of Seraph's next turn.
                </p>

                <p><strong>Skill: Who, me?</strong></p>
                <p style="font-style: italic; font-size: 0.8em; color: #555;">
                    Tangtang crawls onto Seraph's face, molding its body to mimic a target's features for impersonation. The jester hat remains visible, and imperfections may persist.
                </p>

                <p style="margin-top: 8px; font-weight: bold; font-size: 0.75em; text-align: center; color: #4a90e2;">
                    (Acts during Seraph's turn)
                </p>
            </div>
        </div>
    </aside>
    </div>

    </body>
</html>