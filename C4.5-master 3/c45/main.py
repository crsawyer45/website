#!/usr/bin/env python
import pdb
from c45 import C45

#c1 = C45("../data/iris/iris.data", "../data/iris/iris.names")
c1 = C45("/Users/crsawyer/Downloads/C4.5-master3/data/football/game2.data","/Users/crsawyer/Downloads/C4.5-master3/data/football/game.names")
# file = open("C:/Users/ColinSawyer/Desktop/MachineLearning/C4.5-master/data/football/game.names", "r")
# classes = file.readline()
# tes = [x.strip() for x in classes.split(",")]
# print(tes)
c1.fetchData()
c1.preprocessData()
c1.generateTree()
c1.printTree()
