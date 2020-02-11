# -*- coding: utf-8 -*-
"""
Created on Mon Feb 10 18:02:44 2020

@author: danie
"""
#!/usr/bin/env python
import pdb
from c45 import C45

c1 = C45("../data/football/HW3_P1_train.csv", "../data/football/HW3_P1_names.csv")
c1.fetchData()
c1.preprocessData()
c1.generateTree()
c1.printTree()