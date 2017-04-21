x4=Lung.Capacity1
attach(x4)
#x[is.na(x)]<-0
View(x4)
#xx<-cbind(pop,ampct,metpct,unrate,prison,totemployed,employ,military,rpci,domestic_gun_production,gallup_owngun,pgs,totmajor,murder,rape,robbery,assault,burg_test,burglary,hg,gun,majorcrime,mc_noburg,gunsamm,amrmms,amhms,phg,pgun,mc_noassault,r1524,r2544,r4564)
y4<-prcomp(x4,scale=TRUE)
y4
summary(y4)
#str(y)
#head(y$scores)
yy4<-princomp(x4,scores = TRUE,cor = TRUE)
summary(yy4)

#plots

#pie

slices <- c(16, 8, 12, 10, 5)
lbls <- c( "Smoker", "Height", "Exercise", "Age", "Gender")
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/pie.jpeg",width=500,height=500)
pie(slices, labels = lbls, main="Pie Chart of Lung Capacity")
dev.off()

#dot

jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/Plots/lung capacity/dot.jpeg",width=500,height=500)
xx4<-cbind(Gender,Height,Smoker,Exercise,Age,Lung.Capacity..cc.)
dotchart(xx4,labels=row.names(xx4),cex=.7,main="Lung Capacity")
dev.off()

#scree
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/scree_prcomp.jpeg",width=500,height=500)
plot(y4,type="lines")
dev.off()
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/scree_princomp.jpeg",width=500,height=500)
plot(yy,type="lines")
dev.off()

#bi 

jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/bi_prcomp.jpeg",width=500,height=500)
biplot(y4)
dev.off() 

jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/bi_princomp.jpeg",width=500,height=500)
biplot(yy)
dev.off() 

#density
xxx4<-density(xx4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/kernel_density_plot.jpeg",width=500,height=500)
plot(xxx4)
dev.off()

#histogram
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/histogram.jpeg",width=500,height=500)
hist(xx4)
dev.off()


#Decision Trees

ld1<-ctree(Lung.Capacity..cc.~Smoker,data=x4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/ldt1.jpeg",width=500,height=500)
plot(ld1)
dev.off()

ld2<-ctree(Lung.Capacity..cc.~Exercise,data=x4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/ldt2.jpeg",width=500,height=500)
plot(ld2)
dev.off()

ld3<-ctree(Lung.Capacity..cc.~Age,data=x4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/ldt3.jpeg",width=500,height=500)
plot(ld3)
dev.off()

ld4<-ctree(Lung.Capacity..cc.~Height,data=x4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/ldt4.jpeg",width=500,height=500)
plot(ld4)
dev.off()

ld5<-ctree(Lung.Capacity..cc.~Gender,data=x4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/ldt5.jpeg",width=500,height=500)
plot(ld5)
dev.off()

ld6<-ctree(Lung.Capacity..cc.~Smoker+Exercise,data=x4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/ldt6.jpeg",width=500,height=500)
plot(ld6)
dev.off()

ld7<-ctree(Lung.Capacity..cc.~Smoker+Exercise+Age,data=x4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/ldt7.jpeg",width=500,height=500)
plot(ld7)
dev.off()

ld8<-ctree(Lung.Capacity..cc.~Smoker+Exercise+Age+Height,data=x4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/ldt8.jpeg",width=500,height=500)
plot(ld8)
dev.off()

ld9<-ctree(Lung.Capacity..cc.~Smoker+Exercise+Age+Height+Gender,data=x4)
jpeg(filename = "C:/Users/VINOD JAIN/Documents/final/ldt9.jpeg",width=500,height=500)
plot(ld9)
dev.off()
