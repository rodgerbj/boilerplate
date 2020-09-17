git checkout t1
git merge t0
echo "t1 done"

git checkout t1b
git merge t1
echo "t1b done"

git checkout t2
git merge t1b
echo "t2 done"

git checkout t3
git merge t2
echo "t3 done"

git checkout t4
git merge t3
echo "t4 done"

git checkout t5
git merge t4
echo "t5 done"

git checkout t6
git merge t5
echo "t6 done"

git checkout t6b
git merge t6
echo "t6b done"

git checkout t7
git merge t6b
echo "t7 done"

git checkout t8
git merge t7
echo "t1b done"

git checkout t9
git merge t8
echo "t1b done"

git checkout t10
git merge t9
echo "t1b done"

git checkout t11a
git merge t10
echo "t11a done"

git checkout t11b
git merge t11a
echo "t1b done"

git checkout t12
git merge t11b
echo "t1b done"

git checkout t13
git merge t12
echo "t1b done"

git checkout t14a
git merge t13
echo "t1b done"

git checkout t14b
git merge t14a
echo "t1b done"

git checkout t15a
git merge t14b
echo "t15a done"

git checkout t16
git merge t15a
echo "t1b done"

git checkout t17
git merge t16
echo "t1b done"

git checkout t18
git merge t17
echo "t1b done"

git checkout t19
git merge t18
echo "t1b done"

git checkout t20
git merge t19
echo "t1b done"

git checkout t21
git merge t20
echo "t1b done"

git checkout t22
git merge t21
echo "t1b done"

git checkout t23
git merge t22
echo "t1b done"

git checkout t24
git merge t23
echo "t1b done"

git checkout t24b
git merge t24
echo "t1b done"

git checkout t25
git merge t24b
echo "t1b done"

git checkout t26
git merge t25
echo "t1b done"

git checkout t27
git merge t26
echo "t1b done"

git checkout t28
git merge t27
echo "t1b done"

git checkout t29
git merge t28
echo "t1b done"

git checkout t30
git merge t29
echo "t1b done"

# module
git checkout t31
git merge t30
echo "t1b done"

git checkout t32
git merge t31
echo "t1b done"

git checkout t33
git merge t32
echo "t1b done"

git checkout t34
git merge t33
echo "t1b done"

# template
git checkout t35
git merge t34
echo "t1b done"

# ENDE
git checkout tutorial
git merge t35
echo "tutorial done"

