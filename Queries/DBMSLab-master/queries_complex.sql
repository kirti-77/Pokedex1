USE Pokedex;

-- 1 show pokemon whose types do 2x damage to bug
SELECT * FROM PoKemon
WHERE EXISTS 
(SELECT * FROM types
WHERE (Type=PoKemon.Type1 or Type=PoKemon.Type2) AND Bug=2);				

-- 2 show names of moves learnt by tm/hm 
SELECT Moves_name FROM MOVE_descriptions
WHERE EXISTS 
(SELECT m2.MID FROM moves_by_tm_or_hm as m2 
where m2.MID=MOVE_descriptions.MID);

-- 3 show pokemon names whose total base stats are greater than 500
SELECT Name FROM POKemon
WHERE 
(SELECT HP+ATK+DEF+SPATK+SPDEF+SPD AS Total FROM base_stats
WHERE base_stats.ID=POKemon.ID)>500;

-- 4 show name and power of moves learnt by leveling by pokemon "Bulbasaur
SELECT m1.Moves_name, m1.Power FROM move_Descriptions m1, moves_by_leveling m2
where
m2.ID=(SELECT ID FROM poKemon
WHERE (Name="Bulbasaur")) AND
m1.MID=m2.MID;

-- 5 show the name and base stats of pokemon having highest base stat in HP
SELECT pOkemon.ID, HP, ATK, DEF, SPATK, SPDEF, SPD,Name FROM pOkemon, Base_stats
WHERE pOkemon.ID IN
(SELECT ID FROM Base_stats
WHERE HP=(SELECT MAX(HP) from Base_stats)) AND
pOkemon.ID=Base_stats.ID;

-- 6 show the id, name and base stats of all pokemon
SELECT pokemOn.Name, base_Stats.*
FROM 
pokemOn RIGHT JOIN base_Stats
ON pokemOn.ID=base_Stats.ID;

-- 7 show the average base stats of every available primary type
SELECT pokemoN.Type1, AVG(HP), AVG(ATK), AVG(dEF), AVG(SPATK), AVG(SPDEF), AVG(SPD) FROM
pokemoN RIGHT JOIN BASE_Stats
ON pokemoN.ID=BASE_Stats.ID
GROUP BY pokemoN.Type1;

-- 8 show the highest power move that does 0.5x damage on flying
select MAX(Move_DEscriptions.Power) FROM Move_DEscriptions
WHERE Move_DEscriptions.Moves_name in
(SELECT Move_DEscriptions.Moves_name from
Move_DEscriptions RIGHT JOIN TYpes
ON Move_DEscriptions.Type=TYpes.Type
WHERE TYpes.FLY=0.5); 

-- 9 show moves learnt by tm or hm for pokemon with highest spd stat
SELECT MOves_by_tm_or_hm.* FROM MOves_by_tm_or_hm, 
pokeMon RIGHT JOIN Base_STATS
ON pokeMon.ID=Base_STATS.ID
WHERE pokeMon.ID=moves_by_tm_or_hm.ID AND
SPD IN
(SELECT MAX(SPD) FROM Base_STATS);

-- 10 create a view showing pokemon with hidden ability along with their base stats
create view v as
select pokemon.name, base_stats.* from 
pokemon right join base_stats on pokemon.id=Base_Stats.id
WHERE pokemon.AbilityH is not null;

SELECT * FROM VIEW;
