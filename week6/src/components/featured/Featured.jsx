import React from "react";
import styles from "./featured.module.css";
import Image from "next/image";

const Featured = () => {
  return (
    <div className={styles.container}>
    
      <h1 className={styles.title}>
        <b>Hey, MITians here!</b> Discover the stories and creative ideas.
      </h1>
      <div className={styles.post}>
        <div className={styles.imgContainer}>
          <Image src="/spirituality.png" alt="" fill className={styles.image} />
        </div>
        <div className={styles.textContainer}>
          <h1 className={styles.postTitle}>Science & Spirituality</h1>
          <p className={styles.postDesc}>
            India  launched its most awaited scheduled of Chandrayaan 2, not that long ago.The chairman of ISRO K.Sivan was at Tirupati Temple to offer puja for the success of the moon mission. <br/><br/>

Adhyatm consists of two words ‘Adhi’ and ‘Atman’ which simply means pertaining to soul. Spirituality deals with the nature of soul and information related to the soul. A soul that is absolute and the ultimate truth. It is a process of leading the total energy in the body to the soul. <br/><br/>

Spirituality helps us to find meaning in life, provides a foundation of our values to guide us in the way we behave with self, others and the world around us. Spirituality is the science of human growth for self transformation & also for world transformation through Peace & Purity. <br/><br/>

Albert Einstein said once: “No problem can be solved from the same consciousness that created it. We must learn to see the world a new “. 


          </p>
          <button className={styles.button}>Read More</button>
        </div>
      </div>
    </div>
  );
};

export default Featured;

