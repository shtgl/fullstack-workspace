import Link from "next/link";
import Image from "next/image";
import React from "react";
import styles from "./menuPosts.module.css";

const MenuPosts = ({withImage}) => {
  return (
    <div className={styles.items}>
        <Link href="/blog?cat=travel" className={styles.item}>
          {withImage && ( 
          <div className={styles.imageContainer}>
            <Image src="/travel.png" alt="" fill className={styles.image}/>
          </div>
          )}
          <div className={styles.textContainer}>
            <span className={`${styles.category} ${styles.travel}`}>Travel</span>
            <h3 className={styles.postTite}>
              Description - short
            </h3>
            <div className={styles.detail}>
              <span className={styles.username}>Jack</span>
              <span className={styles.date}> - 10.03.2023</span>
            </div>
          </div>
        </Link>
        <Link href="/blog?cat=culture" className={styles.item}>
          {withImage && ( 
          <div className={styles.imageContainer}>
            <Image src="/p1.jpeg" alt="" fill className={styles.image}/>
          </div>
          )}
          <div className={styles.textContainer}>
            <span className={`${styles.category} ${styles.culture}`}>Culture</span>
            <h3 className={styles.postTite}>
              Description - short
            </h3>
            <div className={styles.detail}>
              <span className={styles.username}>Jack</span>
              <span className={styles.date}> - 10.03.2023</span>
            </div>
          </div>
        </Link>
        <Link href="/blog?cat=food" className={styles.item}>
          {withImage && ( 
          <div className={styles.imageContainer}>
            <Image src="/food.png" alt="" fill className={styles.image}/>
          </div>
          )}
          <div className={styles.textContainer}>
            <span className={`${styles.category} ${styles.food}`}>Food</span>
            <h3 className={styles.postTite}>
              Description - short
            </h3>
            <div className={styles.detail}>
              <span className={styles.username}>Jack</span>
              <span className={styles.date}> - 10.03.2023</span>
            </div>
          </div>
        </Link>
        <Link href="/blog?cat=fashion" className={styles.item}>
          {withImage && ( 
          <div className={styles.imageContainer}>
            <Image src="/fashion.png" alt="" fill className={styles.image}/>
          </div>
          )}
          <div className={styles.textContainer}>
            <span className={`${styles.category} ${styles.fashion}`}>Fashion</span>
            <h3 className={styles.postTite}>
              Description - short
            </h3>
            <div className={styles.detail}>
              <span className={styles.username}>Jack</span>
              <span className={styles.date}> - 10.03.2023</span>
            </div>
          </div>
        </Link>
      </div>
  )
}

export default MenuPosts;
